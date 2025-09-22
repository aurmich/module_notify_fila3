<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======


use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
>>>>>>> d1cd7a3 (.)

class ListNotificationTemplates extends XotBaseListRecords
{
    protected static string $resource = NotificationTemplateResource::class;

<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> d1cd7a3 (.)
    public function getTableColumns(): array
    {
        return [];
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> d1cd7a3 (.)
