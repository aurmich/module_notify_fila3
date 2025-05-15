<?php

namespace Modules\Notify\Filament\Resources;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
use Filament\Forms\Components\Textarea;
use Modules\Notify\Filament\Resources\NotificationResource\Pages;
use Modules\Notify\Models\Notification;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;

class NotificationResource extends XotBaseResource
{
    protected static ?string $model = Notification::class;


    public static function getFormSchema(): array
    {
        return [
            'type' => TextInput::make('type')
                ->required()
                ->label('Notification Type'),

            'notifiable_type' => TextInput::make('notifiable_type')
                ->required()
                ->label('Notifiable Type'),

            'notifiable_id' => TextInput::make('notifiable_id')
                ->required()
                ->numeric()
                ->label('Notifiable ID'),
<<<<<<< Updated upstream
<<<<<<< HEAD
            'data' => Textarea::make('data')
                ->label('Notification Data')
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
            'data' => Textarea::make('data')
                ->label('Notification Data')
=======
=======
>>>>>>> 064a54f (.)
            'data' => KeyValue::make('data')
                ->label('Notification Data')
                ->keyLabel('Key')
                ->valueLabel('Value')
<<<<<<< HEAD
>>>>>>> a5a128a (.)
=======
            'data' => Textarea::make('data')
                ->label('Notification Data')
>>>>>>> Stashed changes
=======
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
            'data' => Textarea::make('data')
                ->label('Notification Data')
>>>>>>> Stashed changes
                ->columnSpanFull(),

            'read_at' => DateTimePicker::make('read_at')
                ->label('Read At')
                ->nullable(),

            'created_by' => TextInput::make('created_by')
                ->label('Created By')
                ->disabled(),

            'updated_by' => TextInput::make('updated_by')
                ->label('Updated By')
                ->disabled(),
        ];
    }

   
}
