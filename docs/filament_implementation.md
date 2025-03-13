# Filament Implementation Guide

## Base Classes Hierarchy

### XotBaseResourcePage
Base class for all resource pages in the application. Extends Filament's `Page` class and provides common functionality.

```php
abstract class XotBaseResourcePage extends Page
{
    protected function getViewData(): array
    {
        return [];
    }
}
```

### XotBaseListRecords
Extends `XotBaseResourcePage` for list views. Provides standard list functionality with proper table handling.

### XotBaseEditRecord
Extends `XotBaseResourcePage` for edit views. Handles form display and data manipulation.

## Resource Implementation Patterns

### List Records Implementation
```php
public function getListTableColumns(): array
{
    return [
        'id' => TextColumn::make('id')
            ->sortable()
            ->searchable(),
        'name' => TextColumn::make('name')
            ->searchable()
            ->sortable()
            ->wrap(),
        'created_at' => TextColumn::make('created_at')
            ->dateTime()
            ->sortable(),
    ];
}
```

### Table Filters
```php
public function getTableFilters(): array
{
    return [
        'type' => SelectFilter::make('type')
            ->options(fn () => Model::distinct()->pluck('type', 'type')->toArray()),
    ];
}
```

### Table Actions
```php
public function getTableActions(): array
{
    return [
        'view' => ViewAction::make()
            ->label(''),
        'edit' => EditAction::make()
            ->label(''),
        'delete' => DeleteAction::make()
            ->label('')
            ->requiresConfirmation(),
    ];
}
```

## Media Module Implementation

### TemporaryUpload Model
- Uses `InteractsWithMedia` trait for media handling
- Implements `MassPrunable` for automatic cleanup
- Handles session-based upload management
- Provides static factory methods for file creation
- Implements proper media conversions

### Media Resource Pages
1. **ListMedia**
   - Handles media listing with proper columns and actions
   - Implements file size formatting
   - Provides download and preview capabilities

2. **ListMediaConverts**
   - Manages media conversion tasks
   - Tracks conversion progress
   - Handles various formats and codecs

3. **ListTemporaryUploads**
   - Manages temporary uploads
   - Implements proper cleanup
   - Handles session affinity

### Media Relations
The `MediaRelationManager` handles media relationships:
```php
class MediaRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'media';
    protected static ?string $inverseRelationship = 'model';

    public function form(Form $form): Form
    {
        return MediaResource::form($form, false);
    }
}
```

### Security Features
1. Session affinity for temporary uploads
2. Proper file access controls
3. Safe file handling practices
4. Validation of media properties

### File Operations
1. File size formatting:
```php
TextColumn::make('size')
    ->formatStateUsing(fn (string $state): string => 
        number_format((int) $state / 1024, 2).' KB')
```

2. Support for various mime types
3. Thumbnail generation
4. File download and streaming capabilities

## Best Practices

1. **Type Safety**
   - Use strict typing with `declare(strict_types=1)`
   - Implement proper return type hints
   - Use proper PHPDoc annotations

2. **Code Organization**
   - Follow proper directory structure
   - Keep resource classes focused
   - Use proper namespacing

3. **Error Handling**
   - Use Assert statements for validation
   - Implement proper exception handling
   - Provide meaningful error messages

4. **Performance**
   - Use proper indexing for filters
   - Implement efficient queries
   - Handle large datasets appropriately

5. **Security**
   - Validate all user input
   - Implement proper access controls
   - Handle files securely
