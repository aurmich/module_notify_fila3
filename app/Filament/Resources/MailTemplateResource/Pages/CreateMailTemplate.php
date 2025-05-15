<?php

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

<<<<<<< HEAD
use Filament\Actions;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Lang\Filament\Resources\Pages\LangBaseCreateRecord;

class CreateMailTemplate extends LangBaseCreateRecord
=======
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMailTemplate extends CreateRecord
>>>>>>> a5a128a (.)
{
    protected static string $resource = MailTemplateResource::class;
}
