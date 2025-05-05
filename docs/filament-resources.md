# Risorse Filament del Modulo Notify

## NotificationTemplateResource

### Panoramica
NotificationTemplateResource gestisce i template delle notifiche nel sistema. Estende `XotBaseResource` e implementa le funzionalità base per la gestione dei template.

### Schema del Form

```php
public static function getFormSchema(): array
{
    return [
        Forms\Components\Card::make()
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('body_text')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpan(['lg' => 3]),

                Forms\Components\Textarea::make('body_html')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpan(['lg' => 3]),

                Forms\Components\Textarea::make('preview_data')
                    ->json()
                    ->columnSpan(['lg' => 3]),
            ])
            ->columns(['lg' => 3])
    ];
}
```

### Colonne della Tabella

```php
public static function getTableColumns(): array
{
    return [
        Tables\Columns\TextColumn::make('name'),
        Tables\Columns\TextColumn::make('subject'),
        Tables\Columns\TextColumn::make('created_at')
            ->dateTime(),
        Tables\Columns\TextColumn::make('updated_at')
            ->dateTime(),
    ];
}
```

### Best Practices Seguite

1. **Estensione Corretta**
   - Estende `XotBaseResource`
   - Non sovrascrive metodi `final`
   - Implementa correttamente i metodi astratti

2. **Gestione Label**
   - Utilizza file di traduzione per le label
   - Non usa `->label()` direttamente
   - Segue le convenzioni di traduzione

3. **Struttura del Form**
   - Organizzazione logica dei campi
   - Validazione appropriata
   - Gestione responsive con columnSpan

## Collegamenti Bidirezionali

### Collegamenti nella Root
- [Architettura Filament](../../../../docs/architecture/filament.md)
- [Gestione Notifiche](../../../../docs/architecture/notifications.md)

### Collegamenti ai Moduli
- [XotBaseResource](../../Xot/docs/XotBaseResource.md)
- [Gestione Template](../template-management.md)

## Note Importanti

1. Tutti i testi sono gestiti tramite file di traduzione
2. La validazione è implementata a livello di form
3. I campi sono organizzati in modo logico e responsive
4. Le azioni della tabella seguono le convenzioni standard
5. Non ci sono override non necessari di metodi 