<?php

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

<<<<<<< Updated upstream
<<<<<<< HEAD
use Filament\Actions;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Lang\Filament\Resources\Pages\LangBaseCreateRecord;

class CreateMailTemplate extends LangBaseCreateRecord
=======
use Modules\Notify\Filament\Resources\MailTemplateResource;
=======
>>>>>>> Stashed changes
use Filament\Actions;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Lang\Filament\Resources\Pages\LangBaseCreateRecord;

<<<<<<< Updated upstream
class CreateMailTemplate extends CreateRecord
>>>>>>> a5a128a (.)
=======
class CreateMailTemplate extends LangBaseCreateRecord
>>>>>>> Stashed changes
{
    protected static string $resource = MailTemplateResource::class;
}
