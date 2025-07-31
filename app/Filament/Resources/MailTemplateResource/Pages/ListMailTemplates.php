<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListMailTemplates extends LangBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

    
    public function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('slug')
                ->searchable()
                ->sortable()
                ,

=======
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
>>>>>>> Stashed changes
use Filament\Tables;
use Filament\Tables\Table;

class ListMailTemplates extends LangBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

    public function getTableColumns(): array
    {
        return [
<<<<<<< Updated upstream
>>>>>>> a5a128a (.)
=======
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->label(__('notify::mail.template.fields.name.label')),

>>>>>>> Stashed changes
            Tables\Columns\TextColumn::make('mailable')
                ->searchable()
                ->sortable()
                ,

            Tables\Columns\TextColumn::make('subject')
                ->searchable()
                ->sortable()
                ,

            Tables\Columns\TextColumn::make('counter')
                ->searchable()
                ->sortable()
<<<<<<< HEAD
                ,
            
        ];
    }


=======
                ->label(__('notify::mail.template.fields.layout.label')),

<<<<<<< Updated upstream
=======
>>>>>>> a5a128a (.)
=======
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
<<<<<<< HEAD

=======



>>>>>>> a5a128a (.)
=======

>>>>>>> Stashed changes
>>>>>>> 8c4f4cb (.)
}
