<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
=======
>>>>>>> d1cd7a3 (.)
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Enums\NotificationTypeEnum;
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
=======
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
>>>>>>> d1cd7a3 (.)
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class NotificationTemplateResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = NotificationTemplate::class;

    #[\Override]
    public static function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->helperText(__('notify::template.form.name.helper'))
                ->columnSpan(['lg' => 2]),
            Forms\Components\TextInput::make('subject')
                ->required()
                ->maxLength(255)
                ->helperText(__('notify::template.form.subject.helper'))
                ->columnSpan(['lg' => 2])
                ->translateLabel(),
            Forms\Components\Select::make('type')
                ->options(collect(NotificationTypeEnum::cases())
                    ->mapWithKeys(fn($type) => [$type->value => $type->label()]))
                ->required()
                ->default(NotificationTypeEnum::EMAIL->value)
                ->helperText(__('notify::template.form.type.helper'))
                ->columnSpan(['lg' => 1]),
            Forms\Components\Textarea::make('body_text')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_text.helper'))
                ->rows(5)
                ->translateLabel(),
            Forms\Components\Textarea::make('body_html')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_html.helper'))
                ->rows(10)
                ->translateLabel(),
            Forms\Components\Textarea::make('preview_data')
                ->json()
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.preview_data.helper'))
                ->rows(5),
            Forms\Components\SpatieMediaLibraryFileUpload::make('attachments')
                ->collection('attachments')
                ->multiple()
                ->maxFiles(5)
                ->maxSize(5120)
                ->acceptedFileTypes(['application/pdf', 'image/*'])
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.attachments.helper')),
        ];
    }

    #[\Override]
=======
    protected static ?string $model = NotificationTemplate::class;



    public static function getFormSchema(): array
    {
        return [
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->helperText(__('notify::template.form.name.helper'))
                        ->columnSpan(['lg' => 2]),

                    Forms\Components\TextInput::make('subject')
                        ->required()
                        ->maxLength(255)
                        ->helperText(__('notify::template.form.subject.helper'))
                        ->columnSpan(['lg' => 2])
                        ->translateLabel(),

                    Forms\Components\Select::make('type')
                        ->options(collect(NotificationTypeEnum::cases())->mapWithKeys(fn ($type) => [$type->value => $type->label()]))
                        ->required()
                        ->default(NotificationTypeEnum::EMAIL->value)
                        ->helperText(__('notify::template.form.type.helper'))
                        ->columnSpan(['lg' => 1]),

                    Forms\Components\Textarea::make('body_text')
                        ->required()
                        ->maxLength(65535)
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.body_text.helper'))
                        ->rows(5)
                        ->translateLabel(),

                    Forms\Components\Textarea::make('body_html')
                        ->required()
                        ->maxLength(65535)
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.body_html.helper'))
                        ->rows(10)
                        ->translateLabel(),

                    Forms\Components\Textarea::make('preview_data')
                        ->json()
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.preview_data.helper'))
                        ->rows(5),

                    Forms\Components\SpatieMediaLibraryFileUpload::make('attachments')
                        ->collection('attachments')
                        ->multiple()
                        ->maxFiles(5)
                        ->maxSize(5120)
                        ->acceptedFileTypes(['application/pdf', 'image/*'])
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.attachments.helper')),
        ];
    }



>>>>>>> d1cd7a3 (.)
    public static function getPages(): array
    {
        return [
            ...parent::getPages(),
            'preview' => Pages\PreviewNotificationTemplate::route('/{record}/preview'),
        ];
    }

    /*
<<<<<<< HEAD
     * public static function getEloquentQuery(): Builder
     * {
     * return parent::getEloquentQuery()
     * ->orderBy('name');
     * }
     */
=======
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderBy('name');
    }
            */
>>>>>>> d1cd7a3 (.)
}
