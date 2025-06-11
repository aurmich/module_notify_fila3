# Integrazione Filament del Modulo Notify

## Blade Components

### NotificationCard
```php
<x-filament::card>
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-medium">{{ $title }}</h3>
            <x-filament::badge :color="$status->color">
                {{ $status->label }}
            </x-filament::badge>
        </div>
        
        <div class="prose max-w-none">
            {{ $content }}
        </div>
        
        <div class="flex items-center justify-between text-sm text-gray-500">
            <span>{{ $created_at->diffForHumans() }}</span>
            <div class="flex items-center space-x-2">
                <x-filament::icon-button
                    icon="heroicon-o-eye"
                    :label="__('Visualizza')"
                    wire:click="view"
                />
                <x-filament::icon-button
                    icon="heroicon-o-trash"
                    :label="__('Elimina')"
                    wire:click="delete"
                />
            </div>
        </div>
    </div>
</x-filament::card>
```

### NotificationList
```php
<x-filament::section>
    <div class="space-y-4">
        @foreach($notifications as $notification)
            <x-notify::notification-card
                :notification="$notification"
            />
        @endforeach
        
        <div class="mt-4">
            {{ $notifications->links() }}
        </div>
    </div>
</x-filament::section>
```

### TemplateEditor
```php
<x-filament::form wire:submit="save">
    <div class="space-y-4">
        <x-filament::input.wrapper>
            <x-filament::input.label for="name">
                {{ __('Nome Template') }}
            </x-filament::input.label>
            <x-filament::input.text
                wire:model="name"
                id="name"
                required
            />
        </x-filament::input.wrapper>
        
        <x-filament::input.wrapper>
            <x-filament::input.label for="content">
                {{ __('Contenuto Template') }}
            </x-filament::input.label>
            <x-filament::input.rich-editor
                wire:model="content"
                id="content"
                required
            />
        </x-filament::input.wrapper>
        
        <x-filament::input.wrapper>
            <x-filament::input.label for="placeholders">
                {{ __('Segnaposto Disponibili') }}
            </x-filament::input.label>
            <div class="flex flex-wrap gap-2">
                @foreach($placeholders as $placeholder)
                    <x-filament::badge>
                        {{ $placeholder }}
                    </x-filament::badge>
                @endforeach
            </div>
        </x-filament::input.wrapper>
        
        <x-filament::button type="submit">
            {{ __('Salva Template') }}
        </x-filament::button>
    </div>
</x-filament::form>
```

## Resources

### TemplateResource

Gestisce i template delle notifiche.

```php
namespace Modules\Notify\Filament\Resources;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Filament\Resources\TemplateResource\Pages;
use Modules\Notify\Models\Template;

class TemplateResource extends Resource
{
    protected static ?string $model = Template::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('content')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                EditAction::make(),
                self::getSendTestNotificationAction(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTemplates::route('/'),
            'create' => Pages\CreateTemplate::route('/create'),
            'edit' => Pages\EditTemplate::route('/{record}/edit'),
        ];
    }

    protected static function getSendTestNotificationAction(): Action
    {
        return Action::make('sendTestNotification')
            ->label(__('Invia Test'))
            ->icon('heroicon-o-paper-airplane')
            ->color('primary')
            ->modalHeading(__('Invia Notifica di Test'))
            ->action(function (Template $record, array $data): void {
                app(SendNotificationAction::class)->execute(
                    $data['recipient'],
                    $record->code,
                    $data['test_data'] ?? [],
                    ['mail']
                );

                Notification::make()
                    ->title(__('Notifica di test inviata'))
                    ->success()
                    ->send();
            })
            ->form([
                TextInput::make('recipient')
                    ->email()
                    ->required(),
                KeyValue::make('test_data')
                    ->label(__('Dati di Test')),
            ]);
    }
}
```

### NotificationResource

Visualizza le notifiche inviate.

```php
namespace Modules\Notify\Filament\Resources;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Notify\Filament\Resources\NotificationResource\Pages;
use Modules\Notify\Models\Notification as NotificationModel;

class NotificationResource extends Resource
{
    protected static ?string $model = NotificationModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('recipient')
                    ->required(),
                TextInput::make('channel')
                    ->required(),
                Textarea::make('content')
                    ->required(),
                DateTimePicker::make('sent_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('recipient')
                    ->searchable(),
                TextColumn::make('channel'),
                TextColumn::make('sent_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                ViewAction::make(),
            ])
            ->defaultSort('sent_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotifications::route('/'),
            'view' => Pages\ViewNotification::route('/{record}'),
        ];
    }
}
```

## Actions

### SendTestNotification

Azione per inviare una notifica di test da un template.

```php
namespace Modules\Notify\Actions;

use Filament\Notifications\Notification;
use Modules\Notify\Models\Template;
use Spatie\QueueableAction\QueueableAction;

class SendTestNotification
{
    use QueueableAction;

    public function execute(string $recipient, string $templateCode, array $data, array $channels): void
    {
        // Logica per inviare la notifica di test
        // ...

        Notification::make()
            ->title('Notifica di test inviata con successo')
            ->success()
            ->send();
    }
}
```

## Pages

### Dashboard

Pagina principale del modulo Notify.

```php
namespace Modules\Notify\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'notify::filament.pages.dashboard';
}
```

## Widgets

### LatestNotificationsWidget

Mostra le ultime notifiche.

```php
namespace Modules\Notify\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Modules\Notify\Models\Notification as NotificationModel;

class LatestNotificationsWidget extends Widget
{
    protected static string $view = 'notify::filament.widgets.latest-notifications';

    protected int | string | array $columnSpan = 'full';

    public function getNotificationsProperty()
    {
        return NotificationModel::where('recipient_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();
    }
}
```

### StatsOverviewWidget

Mostra statistiche sulle notifiche.

```php
namespace Modules\Notify\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Notify\Models\Notification as NotificationModel;
use Modules\Notify\Models\Template;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Templates', Template::count())
                ->description('Numero totale di template')
                ->icon('heroicon-o-document-text'),
            Stat::make('Total Notifications Sent', NotificationModel::count())
                ->description('Numero totale di notifiche inviate')
                ->icon('heroicon-o-bell'),
            Stat::make('Notifications Sent Today', NotificationModel::whereDate('sent_at', today())->count())
                ->description('Notifiche inviate oggi')
                ->icon('heroicon-o-calendar'),
        ];
    }
}
```

## Custom Actions in Resource

Esempio di come aggiungere un'azione custom a `TemplateResource` per inviare una notifica di test.

```php
// In TemplateResource.php

use Filament\Forms\Components\KeyValue;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\Template;

// ... (altri use)

class TemplateResource extends Resource
{
    // ... (altre proprietà e metodi)

    public static function table(Table $table): Table
    {
        return $table
            // ... (altre configurazioni della tabella)
            ->actions([
                EditAction::make(),
                self::getSendTestNotificationAction(), // Azione custom aggiunta qui
            ]);
    }

    protected static function getSendTestNotificationAction(): Action
    {
        return Action::make('sendTestNotification')
            ->label(__('Invia Test'))
            ->icon('heroicon-o-paper-airplane')
            ->color('primary')
            ->modalHeading(__('Invia Notifica di Test'))
            ->action(function (Template $record, array $data): void {
                app(SendNotificationAction::class)->execute(
                    $data['recipient'],
                    $record->code,
                    $data['test_data'] ?? [],
                    ['mail']
                );

                Notification::make()
                    ->title(__('Notifica di test inviata'))
                    ->success()
                    ->send();
            })
            ->form([
                TextInput::make('recipient')
                    ->email()
                    ->required(),
                KeyValue::make('test_data')
                    ->label(__('Dati di Test')),
            ]);
    }
}
```

## Navigation

### Menu Configuration

```php
final class NotifyPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('notify')
            ->path('notify')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: module_path('Notify', 'Filament/Resources'), for: 'Modules\Notify\Filament\Resources')
            ->discoverPages(in: module_path('Notify', 'Filament/Pages'), for: 'Modules\Notify\Filament\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
```

## Relation Managers

Qualora si necessiti di implementare `RelationManager` all'interno del modulo Notify (ad esempio, per visualizzare notifiche correlate a un'altra risorsa, o viceversa), è fondamentale seguire le linee guida centralizzate fornite dal modulo Xot.

Tutti i `RelationManager` devono estendere `Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager`.

Per dettagli completi su come:
- Estendere `XotBaseRelationManager`
- Definire lo schema del form (`getFormSchema()`)
- Configurare le colonne della tabella (`getCustomColumns()`)
- Gestire azioni, filtri e traduzioni

Si prega di consultare la documentazione principale:
-   **[Linee Guida per RelationManager e Tabelle Personalizzate Xot in Filament](../../Xot/docs/filament_relationmanager_e_tabelle_xot.md)**

Questo assicura coerenza, riutilizzo del codice e aderenza agli standard del progetto Laraxot.
