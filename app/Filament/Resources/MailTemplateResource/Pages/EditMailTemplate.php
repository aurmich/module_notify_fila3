<?php

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Modules\Notify\Filament\Resources\MailTemplateResource;
use Filament\Actions;
<<<<<<< HEAD
use Modules\Lang\Filament\Resources\Pages\LangBaseEditRecord;

class EditMailTemplate extends LangBaseEditRecord
{
    protected static string $resource = MailTemplateResource::class;

    
=======
use Filament\Resources\Pages\EditRecord;

class EditMailTemplate extends EditRecord
{
    protected static string $resource = MailTemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
>>>>>>> ad8c547 (.)
}
