# Laraxot Documentation

## ActivityPropertyData Documentation

### Class Definition
```php
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Support\Validation\ValidationContext;

/**
 * Activity Property Data Transfer Object
 * 
 * Represents the properties of an activity log entry with strict typing
 * and validation rules.
 */
#[MapInputName(SnakeCaseMapper::class)]
#[MapOutputName(SnakeCaseMapper::class)]
class ActivityPropertyData extends Data
{
    /**
     * @param string|null $old The old value before change
     * @param string|null $new The new value after change
     * @param array<string, array{old: mixed, new: mixed}>|null $changes Array of changed values with old/new pairs
     * @param array<string, mixed>|null $attributes Array of model attributes with their values
     * @param array<string, array{id: int, type: string, name: string}>|null $relations Array of related models with their identifiers
     */
    public function __construct(
        public readonly ?string $old,
        public readonly ?string $new,
        public readonly ?array $changes,
        public readonly ?array $attributes,
        public readonly ?array $relations,
    ) {
    }

    public static function rules(ValidationContext $context): array
    {
        return [
            'old' => ['nullable', 'string', 'max:255'],
            'new' => ['nullable', 'string', 'max:255'],
            'changes' => ['nullable', 'array'],
            'attributes' => ['nullable', 'array'],
            'relations' => ['nullable', 'array'],
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            old: $data['old'] ?? null,
            new: $data['new'] ?? null,
            changes: $data['changes'] ?? null,
            attributes: $data['attributes'] ?? null,
            relations: $data['relations'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'old' => $this->old,
            'new' => $this->new,
            'changes' => $this->changes,
            'attributes' => $this->attributes,
            'relations' => $this->relations,
        ];
    }
}
```

### Key Features
1. **Type Safety**
- All properties are strictly typed
- Array shapes are defined for complex properties
- Nullable types where appropriate
- Proper PHPDoc type hints for IDE support

2. **Validation Rules**
- Uses Spatie's ValidationContext for proper validation
- Includes max length validation for string fields
- Proper array validation for complex structures

3. **Data Transformation**
- fromArray() method for safe data hydration
- toArray() method for consistent serialization
- Snake case mapping for API compatibility

### Best Practices
1. Always use the provided conversion methods
2. Validate data before creating instances
3. Use array shape hints for better IDE support
4. Keep validation rules in sync with the DTO structure
5. Use the DataCollectionCast for properties field in models

### Integration with Activity Model

#### Model Definition
```php
class Activity extends SpatieActivity
{
    protected $casts = [
        'properties' => DataCollectionCast::class.':'.ActivityPropertyData::class,
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    public function subject(): MorphTo
    {
        return $this->morphTo()
            ->withDefault(fn () => new UnknownSubject());
    }

    public function causer(): MorphTo
    {
        return $this->morphTo()
            ->withDefault(fn () => new UnknownCauser());
    }

    public function getTypeAttribute(): ActivityType
    {
        return ActivityType::from($this->event);
    }
}
```

### Converting Listeners to Queable Actions

#### Login Action Example
```php
namespace Modules\Activity\Actions;

use Spatie\QueueableAction\QueueableAction;
use Illuminate\Auth\Events\Login;
use Modules\Activity\Data\LoginActivityData;

class LoginAction
{
    use QueueableAction;

    public function __construct(
        private readonly ActivityLogger $logger
    ) {
    }

    public function execute(LoginActivityData $data): void
    {
        $this->logger->log(
            'login',
            $data->user->id,
            $data->toArray()
        );
    }
}
```

#### Benefits of Queable Actions
1. **Queue Support**: Can be processed asynchronously
2. **Retry Logic**: Built-in retry mechanisms
3. **Type Safety**: Strict input/output types
4. **Testability**: Easier to mock and test
5. **Monitoring**: Built-in queue monitoring
6. **Error Handling**: Centralized error handling

### Best Practices for Activity Logging
1. Always use Data objects for action parameters
2. Implement proper retry logic for queue failures
3. Use dependency injection for services
4. Document action inputs/outputs
5. Implement proper logging
6. Use proper type hints and PHPDoc
7. Validate all incoming data
8. Use array shape hints for complex structures
9. Keep documentation in sync with implementation
10. Use proper namespace organization
