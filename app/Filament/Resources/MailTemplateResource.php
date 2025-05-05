<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Filament\Forms;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MailTemplateResource extends XotBaseResource
{
    protected static ?string $model = MailTemplate::class;

    /**
     * Restituisce lo schema del form per Filament.
     *
     * - Array associativo con chiavi stringhe
     * - Campi ricavati da migration/model: id, mailable, subject, html_template, text_template
     * - Forms\Components\Card deprecato: non usato
     * - Label secondo convenzione notify::mail.template.fields.<campo>.label
     */
    public static function getFormSchema(): array
    {
        // Restituisce un array associativo con chiavi stringhe, campi derivati dal model e migraton
        return [
            'mailable' => Forms\Components\TextInput::make('mailable')
                ->required()
                ->maxLength(255)
                ->label(__('notify::mail.template.fields.mailable.label'))
                ->placeholder(__('notify::mail.template.fields.mailable.placeholder'))
                ->helperText(__('notify::mail.template.fields.mailable.tooltip')),

            'subject' => Forms\Components\TextInput::make('subject')
                ->required()
                ->maxLength(255)
                ->label(__('notify::mail.template.fields.subject.label'))
                ->placeholder(__('notify::mail.template.fields.subject.placeholder'))
                ->helperText(__('notify::mail.template.fields.subject.tooltip')),

            'html_template' => Forms\Components\RichEditor::make('html_template')
                ->required()
                ->columnSpanFull()
                ->label(__('notify::mail.template.fields.body_html.label'))
                ->placeholder(__('notify::mail.template.fields.body_html.placeholder'))
                ->helperText(__('notify::mail.template.fields.body_html.tooltip')),

            'text_template' => Forms\Components\Textarea::make('text_template')
                ->maxLength(65535)
                ->columnSpanFull()
                ->label(__('notify::mail.template.fields.body_text.label'))
                ->placeholder(__('notify::mail.template.fields.body_text.placeholder'))
                ->helperText(__('notify::mail.template.fields.body_text.tooltip')),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
