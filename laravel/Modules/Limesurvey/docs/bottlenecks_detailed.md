# Analisi Dettagliata dei Colli di Bottiglia - Modulo Limesurvey

## Panoramica
Il modulo Limesurvey gestisce l'integrazione con il sistema esterno Limesurvey per i sondaggi. L'analisi ha identificato diverse aree critiche che impattano le performance.

## 1. Sincronizzazione Dati
**Problema**: Sincronizzazione inefficiente con l'API Limesurvey
- Impatto: Latenza nelle operazioni di import/export
- Causa: Chiamate API sincrone e mancanza di caching

**Soluzione Proposta**:
```php
declare(strict_types=1);

namespace Modules\Limesurvey\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Spatie\QueueableAction\QueueableAction;

final class LimesurveyApiService
{
    use QueueableAction;

    private const CACHE_TTL = 3600; // 1 ora

    public function getSurveyData(int $survey_id): array
    {
        return Cache::tags(['limesurvey', "survey_{$survey_id}"])
            ->remember(
                "survey_data_{$survey_id}",
                now()->addMinutes(30),
                fn() => $this->fetchSurveyData($survey_id)
            );
    }

    private function fetchSurveyData(int $survey_id): array
    {
        $response = Http::withToken($this->getAuthToken())
            ->get("/admin/remotecontrol", [
                'method' => 'get_survey_properties',
                'params' => ['sSessionKey' => $this->session_key, 'iSurveyID' => $survey_id]
            ]);

        return $response->throw()->json();
    }

    private function getAuthToken(): string
    {
        return Cache::tags(['limesurvey_auth'])
            ->remember('auth_token', now()->addMinutes(55), function() {
                $response = Http::post("/admin/remotecontrol", [
                    'method' => 'get_session_key',
                    'params' => [config('limesurvey.username'), config('limesurvey.password')]
                ]);

                return $response->throw()->json('result');
            });
    }
}
```

## 2. Gestione Risposte
**Problema**: Processamento inefficiente delle risposte
- Impatto: Overhead nelle operazioni di salvataggio
- Causa: Validazioni sincrone e mancanza di batch processing

**Soluzione Proposta**:
```php
declare(strict_types=1);

namespace Modules\Limesurvey\Actions;

use Illuminate\Support\Facades\DB;
use Modules\Limesurvey\Jobs\ProcessSurveyResponses;
use Spatie\QueueableAction\QueueableAction;

final class HandleSurveyResponsesAction
{
    use QueueableAction;

    public function execute(array $responses, int $survey_id): void
    {
        // Salvataggio rapido dei dati essenziali
        $batch = $this->createResponseBatch($responses, $survey_id);
        
        // Processamento asincrono dei dettagli
        ProcessSurveyResponses::dispatch($batch)
            ->onQueue('limesurvey-processing');
    }

    private function createResponseBatch(array $responses, int $survey_id): array
    {
        return DB::transaction(function() use ($responses, $survey_id) {
            return collect($responses)
                ->map(fn($response) => [
                    'survey_id' => $survey_id,
                    'response_data' => json_encode($response),
                    'status' => 'pending',
                    'created_at' => now()
                ])
                ->chunk(100)
                ->each(fn($chunk) => DB::table('survey_responses')->insert($chunk->toArray()))
                ->all();
        });
    }
}
```

## 3. Ottimizzazione Cache
**Problema**: Strategia di caching non ottimale
- Impatto: Hit rate basso e overhead di memoria
- Causa: Cache non strutturata e TTL non ottimizzati

**Soluzione Proposta**:
```php
declare(strict_types=1);

namespace Modules\Limesurvey\Services;

use Illuminate\Support\Facades\Cache;
use Psr\SimpleCache\InvalidArgumentException;

final class LimesurveyCache
{
    private const DEFAULT_TTL = 3600; // 1 ora

    public function remember(string $key, mixed $value, ?int $ttl = null): mixed
    {
        try {
            return Cache::tags($this->determineTags($key))
                ->remember(
                    $key,
                    $ttl ?? $this->determineTTL($key),
                    fn() => $value
                );
        } catch (InvalidArgumentException) {
            return $value;
        }
    }

    private function determineTTL(string $key): int
    {
        return match (true) {
            str_contains($key, 'survey_structure') => now()->addDay()->diffInSeconds(),
            str_contains($key, 'responses') => now()->addMinutes(15)->diffInSeconds(),
            str_contains($key, 'token') => now()->addMinutes(55)->diffInSeconds(),
            default => self::DEFAULT_TTL
        };
    }

    private function determineTags(string $key): array
    {
        $tags = ['limesurvey'];
        
        if (str_contains($key, 'survey_')) {
            $tags[] = 'surveys';
        }
        
        if (str_contains($key, 'response_')) {
            $tags[] = 'responses';
        }
        
        return $tags;
    }
}
```

## Metriche di Performance

### Obiettivi
- Tempo sincronizzazione: < 5s per survey
- Tempo salvataggio risposta: < 200ms
- Cache hit rate: > 90%
- Memoria utilizzata: < 128MB

### Monitoraggio
```php
// In: Providers/LimesurveyServiceProvider.php
private function setupPerformanceMonitoring(): void
{
    // Monitoring API
    Http::macro('withPerformanceMonitoring', function () {
        return $this->beforeSending(function ($request) {
            $request->start_time = microtime(true);
        })->afterSending(function ($response, $request) {
            $duration = microtime(true) - $request->start_time;
            
            if ($duration > 1.0) { // 1 secondo
                Log::channel('limesurvey_performance')
                    ->warning('Chiamata API lenta', [
                        'endpoint' => $request->url(),
                        'duration' => $duration,
                        'status' => $response->status()
                    ]);
            }
        });
    });

    // Monitoring memoria
    $this->app->terminating(function () {
        $memoryUsage = memory_get_peak_usage(true) / 1024 / 1024;
        
        if ($memoryUsage > 128) {
            Log::channel('limesurvey_performance')
                ->warning('Alto utilizzo memoria', [
                    'memory_mb' => $memoryUsage
                ]);
        }
    });
}
```

## Piano di Implementazione

### Fase 1 (Immediata)
- Implementare caching API
- Ottimizzare sincronizzazione
- Migliorare gestione risposte

### Fase 2 (Medio Termine)
- Implementare batch processing
- Ottimizzare gestione memoria
- Migliorare resilienza API

### Fase 3 (Lungo Termine)
- Implementare sincronizzazione real-time
- Ottimizzare scalabilità
- Migliorare monitoring

## Note Tecniche Aggiuntive

### 1. Configurazione API
```php
// In: config/limesurvey.php
return [
    'api' => [
        'base_url' => env('LIMESURVEY_API_URL'),
        'username' => env('LIMESURVEY_USERNAME'),
        'password' => env('LIMESURVEY_PASSWORD'),
        'timeout' => env('LIMESURVEY_TIMEOUT', 30),
        'retry' => [
            'times' => env('LIMESURVEY_RETRY_TIMES', 3),
            'sleep' => env('LIMESURVEY_RETRY_SLEEP', 1)
        ]
    ],
    'cache' => [
        'ttl' => [
            'survey' => env('LIMESURVEY_CACHE_SURVEY_TTL', 3600),
            'responses' => env('LIMESURVEY_CACHE_RESPONSES_TTL', 900),
            'token' => env('LIMESURVEY_CACHE_TOKEN_TTL', 3300)
        ]
    ],
    'batch' => [
        'size' => env('LIMESURVEY_BATCH_SIZE', 100),
        'timeout' => env('LIMESURVEY_BATCH_TIMEOUT', 300)
    ]
];
```

### 2. Gestione Errori
```php
// In: Exceptions/LimesurveyApiException.php
declare(strict_types=1);

namespace Modules\Limesurvey\Exceptions;

use Exception;

final class LimesurveyApiException extends Exception
{
    public static function fromResponse(array $response): self
    {
        return new self(
            message: $response['status'] ?? 'Unknown error',
            code: (int) ($response['error'] ?? 500)
        );
    }
}
```

### 3. Rate Limiting
```php
// In: Middleware/LimesurveyRateLimiter.php
declare(strict_types=1);

namespace Modules\Limesurvey\Middleware;

use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

final class LimesurveyRateLimiter
{
    public function handle($request, $next): Response
    {
        return RateLimiter::attempt(
            'limesurvey_api',
            60, // massimo 60 richieste
            fn() => $next($request),
            60 // per minuto
        );
    }
}
``` 