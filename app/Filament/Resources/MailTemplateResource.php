<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;

class MailTemplateResource extends LangBaseResource
{
    protected static null|string $model = MailTemplate::class;
=======
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Group;
use Modules\Notify\Models\MailTemplate;
use Filament\Forms\Components\TextInput;
use Modules\Lang\Filament\Resources\LangBaseResource;

class MailTemplateResource extends LangBaseResource
{
    protected static ?string $model = MailTemplate::class;
>>>>>>> 2b275b1 (.)

    /**
     * Restituisce lo schema del form per Filament.
     *
     * - Array associativo con chiavi stringhe
     * - Campi ricavati da migration/model: id, mailable, subject, html_template, text_template
     * - Le etichette, i placeholder e i testi di aiuto sono gestiti tramite LangServiceProvider
     * - File di traduzione: Modules/Notify/resources/lang/{locale}/mail_template.php
     */
<<<<<<< HEAD
    #[\Override]
    public static function getFormSchema(): array
    {
        return [
            'mailable' => Forms\Components\TextInput::make('mailable')->required()->maxLength(255),
=======
    public static function getFormSchema(): array
    {
        return [
            'mailable' => Forms\Components\TextInput::make('mailable')
                ->required()
                ->maxLength(255),
>>>>>>> 2b275b1 (.)
            //'name' => Forms\Components\TextInput::make('name'),
            //'slug' => Forms\Components\TextInput::make('slug'),
            Group::make()
                ->schema([
                    TextInput::make('name')
                        ->label('Nome Template')
                        ->required()
                        //->live(debounce: 200)
                        //->reactive()
                        ->afterStateUpdated(function (string $state, Set $set) {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
<<<<<<< HEAD
                        ->unique(ignoreRecord: true),
                ])
                ->columns(2),
            //->columnSpan('full'),

            'subject' => Forms\Components\TextInput::make('subject')->required()->maxLength(255),
            'html_template' => Forms\Components\RichEditor::make('html_template')->required()->columnSpanFull(),
            'params_display' => Forms\Components\View::make('notify::filament.components.params-badges')
                ->viewData(fn($record) => ['params' => $record?->params])
                ->columnSpanFull()
                ->visible(fn($record): bool => !empty($record->params)),
            'text_template' => Forms\Components\Textarea::make('text_template')->maxLength(65535)->columnSpanFull(),
            'sms_template' => Forms\Components\Textarea::make('sms_template')->columnSpanFull(),
=======
                        ->unique(ignoreRecord: true)
                ])
                ->columns(2),
                //->columnSpan('full'),

            'subject' => Forms\Components\TextInput::make('subject')
                ->required()
                ->maxLength(255),

            'html_template' => Forms\Components\RichEditor::make('html_template')
                ->required()
                ->columnSpanFull(),

            'params_display' => Forms\Components\View::make('notify::filament.components.params-badges')
                ->viewData(fn ($record) => ['params' => $record?->params])
                ->columnSpanFull()
                ->visible(fn ($record): bool => !empty($record->params)),

           

            'text_template' => Forms\Components\Textarea::make('text_template')
                ->maxLength(65535)
                ->columnSpanFull(),
            'sms_template' => Forms\Components\Textarea::make('sms_template')
                ->columnSpanFull(),
>>>>>>> 2b275b1 (.)
        ];
    }
}
