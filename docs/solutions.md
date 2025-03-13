# Soluzioni Tecniche - Modulo Limesurvey

## Problemi Identificati e Soluzioni

### 1. Sincronizzazione Dati (`Modules/Limesurvey/Actions/SyncSurveyDataAction.php`)
```php
// Problema: Sincronizzazione inefficiente
public function execute(Survey $survey) {
    // Sincronizzazione sincrona che blocca
}

// Soluzione proposta:
public function execute(Survey $survey): string {
    $job = new ProcessSurveySync($survey);
    $this->dispatch($job);
    
    return $job->getJobId();
}

class ProcessSurveySync implements ShouldQueue {
    use InteractsWithQueue, Queueable;
    
    public function handle() {
        return DB::transaction(function() {
            return LazyCollection::make(function () {
                yield from $this->fetchSurveyDataInChunks();
            })->chunk(100)->each(function ($chunk) {
                $this->processSurveyChunk($chunk);
            });
        });
    }
    
    private function fetchSurveyDataInChunks() {
        $offset = 0;
        $limit = 100;
        
        while ($data = $this->limesurveyApi->getSurveyData($this->survey->id, $offset, $limit)) {
            yield from $data;
            $offset += $limit;
        }
    }
}
```

### 2. API Integration (`Modules/Limesurvey/Services/LimesurveyApiService.php`)
```php
// Problema: Chiamate API non ottimizzate
public function getSurveyData($surveyId) {
    // Chiamate API singole non efficienti
}

// Soluzione proposta:
class LimesurveyApiService {
    private $cache;
    private $rateLimiter;
    
    public function __construct(Cache $cache, RateLimiter $rateLimiter) {
        $this->cache = $cache;
        $this->rateLimiter = $rateLimiter;
    }
    
    public function getSurveyData($surveyId, $offset = 0, $limit = 100): array {
        $cacheKey = "survey_data_{$surveyId}_{$offset}_{$limit}";
        
        return $this->cache->tags(['limesurvey', "survey_{$surveyId}"])
            ->remember($cacheKey, now()->addMinutes(30), function() use ($surveyId, $offset, $limit) {
                return $this->rateLimiter->attempt(
                    key: "limesurvey_api",
                    maxAttempts: 60,
                    callback: fn() => $this->makeApiCall($surveyId, $offset, $limit)
                );
            });
    }
    
    private function makeApiCall($surveyId, $offset, $limit) {
        try {
            $response = Http::withToken($this->getToken())
                ->get("/api/surveys/{$surveyId}", [
                    'offset' => $offset,
                    'limit' => $limit
                ]);
                
            return $response->throw()->json();
        } catch (RequestException $e) {
            Log::error('Limesurvey API error', [
                'survey_id' => $surveyId,
                'error' => $e->getMessage()
            ]);
            
            throw new LimesurveyApiException($e->getMessage());
        }
    }
}
```

### 3. Token Management (`Modules/Limesurvey/Services/TokenService.php`)
```php
// Problema: Gestione token inefficiente
public function getToken() {
    // Rigenerazione token ad ogni richiesta
}

// Soluzione proposta:
class TokenService {
    private Cache $cache;
    
    public function getToken(): string {
        return $this->cache->remember('limesurvey_token', now()->addMinutes(55), function() {
            return $this->generateNewToken();
        });
    }
    
    public function refreshToken(): string {
        $this->cache->forget('limesurvey_token');
        return $this->getToken();
    }
    
    private function generateNewToken(): string {
        try {
            $response = Http::post('/api/auth', [
                'username' => config('limesurvey.username'),
                'password' => config('limesurvey.password')
            ]);
            
            return $response->throw()->json('token');
        } catch (RequestException $e) {
            Log::error('Token generation failed', [
                'error' => $e->getMessage()
            ]);
            
            throw new TokenGenerationException($e->getMessage());
        }
    }
}
```

### 4. Survey Processing (`Modules/Limesurvey/Actions/ProcessSurveyResponsesAction.php`)
```php
// Problema: Elaborazione risposte non ottimizzata
public function execute(Survey $survey) {
    // Elaborazione sincrona delle risposte
}

// Soluzione proposta:
class ProcessSurveyResponsesAction {
    public function execute(Survey $survey): void {
        $responses = $this->fetchResponses($survey);
        
        $responses->chunk(100)->each(function($chunk) {
            ProcessResponsesBatch::dispatch($chunk);
        });
    }
    
    private function fetchResponses(Survey $survey) {
        return LazyCollection::make(function() use ($survey) {
            $offset = 0;
            $limit = 100;
            
            while ($responses = $this->getResponseBatch($survey, $offset, $limit)) {
                yield from $responses;
                $offset += $limit;
            }
        });
    }
}

class ProcessResponsesBatch implements ShouldQueue {
    use Batchable, Queueable;
    
    public function handle() {
        DB::transaction(function() {
            collect($this->responses)->each(function($response) {
                $this->processResponse($response);
            });
        });
    }
}
```

## Ottimizzazioni Database

### 1. Indici e Struttura
```sql
-- In: database/migrations/optimize_limesurvey_tables.php
CREATE INDEX survey_responses_idx ON survey_responses (survey_id, response_id);
CREATE INDEX survey_questions_idx ON survey_questions (survey_id, question_id);
CREATE INDEX survey_status_idx ON surveys (status) WHERE status IN ('active', 'processing');
```

### 2. Query Optimization
```php
// In: Modules/Limesurvey/Traits/HasOptimizedQueries.php
trait HasOptimizedQueries {
    public function scopeWithEssentialRelations($query) {
        return $query->with([
            'responses' => fn($q) => $q->select(['id', 'survey_id', 'response_data']),
            'questions' => fn($q) => $q->select(['id', 'survey_id', 'title', 'type'])
        ]);
    }
    
    public function scopeActiveOnly($query) {
        return $query->where('status', 'active')
            ->whereNull('deleted_at')
            ->useIndex('survey_status_idx');
    }
}
```

## Cache Strategy

### 1. Cache Configuration
```php
// In: Modules/Limesurvey/Config/cache.php
return [
    'ttl' => [
        'survey_data' => 3600,      // 1 hour
        'responses' => 1800,        // 30 minutes
        'token' => 3300,           // 55 minutes
        'questions' => 7200        // 2 hours
    ],
    'tags' => [
        'surveys' => true,
        'responses' => true,
        'questions' => true
    ]
];
```

### 2. Cache Implementation
```php
// In: Modules/Limesurvey/Services/SurveyCacheService.php
class SurveyCacheService {
    public function getCachedSurveyData(Survey $survey): array {
        return Cache::tags(['surveys', "survey_{$survey->id}"])
            ->remember(
                "survey_data_{$survey->id}",
                config('limesurvey.cache.ttl.survey_data'),
                fn() => $this->fetchSurveyData($survey)
            );
    }
    
    public function invalidateSurveyCache(Survey $survey): void {
        Cache::tags([
            'surveys',
            "survey_{$survey->id}",
            'responses',
            'questions'
        ])->flush();
    }
}
```

## Error Handling

### 1. Exception Handling
```php
// In: Modules/Limesurvey/Exceptions/Handler.php
class Handler extends ExceptionHandler {
    protected $dontReport = [
        TokenGenerationException::class,
        SurveyNotFoundException::class
    ];
    
    public function register(): void {
        $this->reportable(function (LimesurveyApiException $e) {
            Log::channel('limesurvey')->error('API Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        });
        
        $this->renderable(function (LimesurveyApiException $e) {
            return response()->json([
                'error' => 'Limesurvey service unavailable',
                'message' => $e->getMessage()
            ], 503);
        });
    }
}
```

## Monitoring

### 1. Performance Monitoring
```php
// In: Modules/Limesurvey/Middleware/ApiPerformanceMonitor.php
class ApiPerformanceMonitor {
    public function handle($request, $next) {
        $start = microtime(true);
        
        $response = $next($request);
        
        $duration = microtime(true) - $start;
        
        if ($duration > 1.0) { // 1 secondo
            Log::channel('limesurvey_performance')
                ->warning('Slow API request', [
                    'endpoint' => $request->path(),
                    'duration' => $duration,
                    'memory' => memory_get_peak_usage(true)
                ]);
        }
        
        return $response;
    }
}
```

### 2. Health Checks
```php
// In: Modules/Limesurvey/Health/LimesurveyApiCheck.php
class LimesurveyApiCheck extends Check {
    public function run(): Result {
        try {
            $response = Http::timeout(5)
                ->get(config('limesurvey.api_url') . '/health');
                
            return $response->successful()
                ? Result::ok()
                : Result::failed('Limesurvey API is not responding');
        } catch (Exception $e) {
            return Result::failed($e->getMessage());
        }
    }
}
```

## Testing

### 1. Integration Tests
```php
// In: Modules/Limesurvey/Tests/Integration/SurveyIntegrationTest.php
class SurveyIntegrationTest extends TestCase {
    public function test_survey_sync_process() {
        $survey = Survey::factory()->create();
        
        $job = app(SyncSurveyDataAction::class)
            ->execute($survey);
            
        $this->assertJobDispatched(ProcessSurveySync::class);
        
        Queue::assertPushed(function (ProcessSurveySync $job) use ($survey) {
            return $job->survey->id === $survey->id;
        });
    }
}
```

### 2. Performance Tests
```php
// In: Modules/Limesurvey/Tests/Performance/ApiPerformanceTest.php
class ApiPerformanceTest extends TestCase {
    public function test_api_response_time() {
        $start = microtime(true);
        
        $response = $this->get('/api/limesurvey/surveys');
        
        $duration = microtime(true) - $start;
        
        $response->assertOk();
        $this->assertLessThan(1.0, $duration);
    }
}
```

## Note di Implementazione

1. Priorità di Intervento:
   - Ottimizzazione sincronizzazione dati
   - Miglioramento gestione token
   - Implementazione cache strategica
   - Ottimizzazione query

2. Monitoraggio:
   - Implementare health checks
   - Monitorare performance API
   - Tracciare errori e fallimenti
   - Analizzare pattern di utilizzo

3. Manutenzione:
   - Pulizia cache regolare
   - Verifica indici database
   - Aggiornamento documentazione
   - Review codice periodica 