<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListMailTemplates extends XotBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('mailable')
                ->searchable()
                ->sortable()
                ->label(__('notify::mail.template.fields.mailable.label')),

            Tables\Columns\TextColumn::make('subject')
                ->searchable()
                ->sortable()
                ->label(__('notify::mail.template.fields.subject.label')),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }




}
