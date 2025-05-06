<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> 185a07e (.)

/**
 * --
 */
class CreateNotifyTheme extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = NotifyThemeResource::class;
}
