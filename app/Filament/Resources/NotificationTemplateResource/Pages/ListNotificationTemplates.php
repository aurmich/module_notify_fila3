<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;



use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;

class ListNotificationTemplates extends XotBaseListRecords
{
    protected static string $resource = NotificationTemplateResource::class;

<<<<<<< HEAD
    public function getTableColumns(): array
=======
    public function getListTableColumns(): array
>>>>>>> a5a128a (.)
    {
        return [];
    }
} 