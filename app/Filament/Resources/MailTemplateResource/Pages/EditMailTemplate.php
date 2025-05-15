<?php

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Modules\Notify\Filament\Resources\MailTemplateResource;
use Filament\Actions;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Modules\Lang\Filament\Resources\Pages\LangBaseEditRecord;

class EditMailTemplate extends LangBaseEditRecord
{
    protected static string $resource = MailTemplateResource::class;

    
=======
use Filament\Resources\Pages\EditRecord;
=======
use Modules\Lang\Filament\Resources\Pages\LangBaseEditRecord;
>>>>>>> Stashed changes

class EditMailTemplate extends LangBaseEditRecord
{
    protected static string $resource = MailTemplateResource::class;

<<<<<<< Updated upstream
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
>>>>>>> a5a128a (.)
=======
    
>>>>>>> Stashed changes
}
