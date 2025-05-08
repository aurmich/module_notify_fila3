<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

use Modules\Notify\Models\MailTemplate;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Filament\Forms;

class MailTemplateResource extends LangBaseResource
{
    protected static ?string $model = MailTemplate::class;

    /**
     * Restituisce lo schema del form per Filament.
     *
     * - Array associativo con chiavi stringhe
     * - Campi ricavati da migration/model: id, mailable, subject, html_template, text_template
     * - Le etichette, i placeholder e i testi di aiuto sono gestiti tramite LangServiceProvider
     * - File di traduzione: Modules/Notify/resources/lang/{locale}/mail_template.php
     */
    public static function getFormSchema(): array
    {
        return [
            'mailable' => Forms\Components\TextInput::make('mailable')
                ->required()
                ->maxLength(255),

            'subject' => Forms\Components\TextInput::make('subject')
                ->required()
                ->maxLength(255),

            'html_template' => Forms\Components\RichEditor::make('html_template')
                ->required()
                ->columnSpanFull(),

            'text_template' => Forms\Components\Textarea::make('text_template')
                ->maxLength(65535)
                ->columnSpanFull(),
        ];
    }
}