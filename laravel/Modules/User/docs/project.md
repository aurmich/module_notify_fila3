## Converting Services to Actions

The project follows the Action pattern using Spatie's QueueableAction. Key principles:

1. Each Action should:
   - Use `Spatie\QueueableAction\QueueableAction` trait
   - Have a single `execute()` method
   - Handle one specific business operation
   - Return models or data objects
   - Be queueable when appropriate

2. Example Action structure:
```php
namespace Modules\ModuleName\Actions;

use Spatie\QueueableAction\QueueableAction;

class ExampleAction
{
    use QueueableAction;

    public function execute(mixed $input): mixed
    {
        // Business logic here
        return $result;
    }
}
```

3. When converting Services:
   - Break down service methods into focused Actions
   - Move configuration to Data objects
   - Use dependency injection
   - Maintain clear input/output contracts

4. Benefits:
   - Better separation of concerns
   - Improved testability
   - Queueable operations
   - Clearer code organization

### LimeJsonService Conversion Plan

The LimeJsonService will be converted into multiple focused Actions:

1. **CreateLimeSessionAction**
   - Handles API authentication
   - Returns session key
   - Uses LimeCredentialsData for configuration

2. **AddSurveyParticipantsAction**
   - Adds participants to survey
   - Uses ParticipantData collection
   - Returns response data

3. **UpdateContactTokenAction**
   - Updates contact tokens
   - Uses ContactTokenData
   - Returns updated token

4. **ActivateSurveyTokensAction**
   - Activates survey tokens
   - Returns activation status

Each Action will:
- Use Spatie LaravelData for input/output
- Be independently testable
- Follow single responsibility principle

## Using Spatie LaravelData

The project uses Spatie LaravelData for strongly-typed data transfer objects. Key patterns:

1. Basic Data Object Example:
```php
namespace Modules\ModuleName\Data;

use Spatie\LaravelData\Data;

class ExampleData extends Data
{
    public function __construct(
        public string $name,
        public int $age,
        public ?string $description = null
    ) {}
}
```

2. Data Collection Example:
```php
namespace Modules\ModuleName\Data;

use Spatie\LaravelData\DataCollection;

class ExampleCollection extends DataCollection
{
    public function current(): ExampleData
    {
        return parent::current();
    }
}
```

3. Usage in Actions:
```php
public function execute(ExampleData $data): ExampleData
{
    // Use typed properties
    $name = $data->name;
    
    return new ExampleData(
        name: $name,
        age: $data->age + 1
    );
}
```

4. Benefits:
- Strong typing
- Automatic validation
- Serialization/deserialization
- Immutability
- Better IDE support

### Implementation Example: CreateLimeSessionAction

```php
// Usage in controller
$credentials = LimeCredentialsData::fromConfig();
$sessionKey = app(CreateLimeSessionContract::class)->execute($credentials);
```

Key Features:
- Implements CreateLimeSessionContract interface
- Uses proper exception hierarchy
- Includes comprehensive logging
- Configurable timeout (30 seconds)
- Strict input validation with Spatie LaravelData
  - Username: required, string, min:3
  - Password: required, string, min:8
  - BaseUrl: required, valid URL
- Automatic configuration via fromConfig()

Error Handling:
- Throws LimeSurveyException for API errors
- Validates API response structure
- Provides detailed error messages
- Includes stack traces in logs
- Validates input data before API calls

Best Practices:
- Use fromConfig() method for credentials
- Type-hint against interface
- Handle errors at appropriate levels
- Log all important events
- Use dependency injection
- Follow single responsibility principle
- Validate data at the boundary

## Correzione del Posizionamento di ParticipantData

Durante la revisione del codice, è stato identificato che `ParticipantData` era posizionato nella directory `Data` anziché nella directory corretta `Datas`. Questo errore è stato corretto per mantenere la coerenza con le convenzioni di denominazione e organizzazione del progetto.

### Motivo della Correzione

1. **Coerenza del Progetto**: La directory `Datas` è utilizzata per contenere tutti gli oggetti dati definiti con `Spatie\LaravelData`. Mantenere tutti i file correlati in una directory specifica aiuta a migliorare l'organizzazione e la manutenibilità del codice.

2. **Conformità alle Convenzioni**: Seguire le convenzioni di denominazione stabilite nel progetto assicura che il codice sia facilmente comprensibile e navigabile da tutti i membri del team.

3. **Facilità di Manutenzione**: Una struttura di directory chiara e coerente facilita la manutenzione del codice e riduce il rischio di errori durante lo sviluppo.

Questa correzione è stata implementata e i riferimenti nel codice sono stati aggiornati di conseguenza.
