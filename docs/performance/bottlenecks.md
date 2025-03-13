# Limesurvey Module Performance Bottlenecks

## Survey Data Synchronization

### 1. Survey Import Process
File: `app/Services/SurveyImportService.php`

**Bottlenecks:**
- Importazione sincrona di grandi survey
- Consumo memoria eccessivo durante import
- Lock del database durante sincronizzazione

**Soluzioni:**
```php
// 1. Import asincrono con jobs
class ImportSurveyJob implements ShouldQueue {
    public function handle() {
        return DB::transaction(function() {
            return $this->importChunked();
        });
    }

    protected function importChunked() {
        collect($this->surveyData)
            ->chunk(1000)
            ->each(fn($chunk) => 
                $this->processSurveyChunk($chunk)
            );
    }
}

// 2. Ottimizzazione memoria
protected function processSurveyChunk($chunk) {
    return LazyCollection::make(function() use ($chunk) {
        yield from $chunk;
    })->each(fn($item) => 
        $this->importSingleItem($item)
    );
}
```

### 2. Response Data Handling
File: `app/Services/ResponseService.php`

**Bottlenecks:**
- Query non ottimizzate per risposte multiple
- Caricamento eccessivo di metadati
- Gestione inefficiente delle relazioni

**Soluzioni:**
```php
// 1. Query ottimizzate
public function getResponses($surveyId) {
    return DB::table('survey_responses')
        ->select(['id', 'response_data'])
        ->where('survey_id', $surveyId)
        ->lazyById(1000)
        ->through(fn($response) => 
            $this->processResponse($response)
        );
}

// 2. Eager loading selettivo
protected function loadResponseData($response) {
    return $response->load([
        'answers' => fn($query) => $query->select(['id', 'value']),
        'metadata' => fn($query) => $query->select(['id', 'key', 'value'])
    ]);
}
```

## Question Management

### 1. Question Tree Building
File: `app/Services/QuestionTreeService.php`

**Bottlenecks:**
- Costruzione ricorsiva inefficiente
- Memoria eccessiva per survey complessi
- Cache non utilizzato per strutture comuni

**Soluzioni:**
```php
// 1. Cache per strutture frequenti
public function buildQuestionTree($surveyId) {
    $cacheKey = "question_tree_{$surveyId}";
    return Cache::tags(['questions'])
        ->remember($cacheKey, now()->addHour(), 
            fn() => $this->generateTree($surveyId)
        );
}

// 2. Ottimizzazione ricorsione
protected function generateTree($surveyId) {
    return DB::table('questions')
        ->where('survey_id', $surveyId)
        ->orderBy('order')
        ->get()
        ->groupBy('parent_id')
        ->pipe(fn($groups) => 
            $this->buildTreeStructure($groups)
        );
}
```

## API Integration

### 1. Remote Survey Access
File: `app/Services/LimesurveyApiService.php`

**Bottlenecks:**
- Chiamate API sincrone bloccanti
- Nessun retry per fallimenti
- Cache non utilizzato per risposte comuni

**Soluzioni:**
```php
// 1. Gestione API resiliente
public function getSurveyData($surveyId) {
    return retry(3, function() use ($surveyId) {
        return Cache::remember(
            "survey_data_{$surveyId}",
            now()->addMinutes(30),
            fn() => $this->fetchSurveyData($surveyId)
        );
    }, 100);
}

// 2. Chiamate API parallele
public function batchGetSurveys($ids) {
    return parallel()->map($ids, function($id) {
        return $this->getSurveyData($id);
    });
}
```

## Data Export

### 1. Survey Export Process
File: `app/Exports/SurveyExport.php`

**Bottlenecks:**
- Export sincrono di grandi dataset
- Memoria insufficiente per export completi
- Nessun feedback di progresso

**Soluzioni:**
```php
// 1. Export asincrono
class QueuedSurveyExport implements ShouldQueue {
    public function handle() {
        return (new SurveyExport($this->surveyId))
            ->chunk(1000)
            ->queue("exports/survey_{$this->surveyId}.xlsx");
    }
}

// 2. Streaming export
public function collection() {
    return new LazyCollection(function () {
        yield from $this->getSurveyData()
            ->cursor();
    });
}
```

## Monitoring Recommendations

### 1. Performance Metrics
Monitorare:
- Tempo di sincronizzazione survey
- Latenza API
- Memoria durante import/export
- Cache hit ratio

### 2. Alerting
Alert per:
- Sync fallite
- API timeout
- Memoria eccessiva
- Export falliti

### 3. Logging
Implementare:
- Query logging
- API request logging
- Error tracking
- Performance profiling

## Immediate Actions

1. **Implementare Caching:**
   ```php
   // Cache per dati frequenti
   protected function getSurveyStructure($id) {
       return Cache::tags(['survey_structure'])
           ->remember("structure_{$id}", 
               now()->addHour(),
               fn() => $this->buildStructure($id)
           );
   }
   ```

2. **Ottimizzare Query:**
   ```php
   // Query ottimizzate
   protected function getResponses() {
       return DB::table('responses')
           ->select(['id', 'data'])
           ->where('survey_id', $this->surveyId)
           ->whereNotNull('submitted_at')
           ->chunk(1000, function($responses) {
               $this->processResponseChunk($responses);
           });
   }
   ```

3. **Gestione Memoria:**
   ```php
   // Gestione efficiente memoria
   public function processLargeDataset() {
       return LazyCollection::make(function () {
           yield from $this->getDataIterator();
       })->chunk(1000)
         ->each(fn($chunk) => 
             $this->processChunk($chunk)
         );
   }
   ```
