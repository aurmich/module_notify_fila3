<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\SessionResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Xot\Filament\Resources\SessionResource;

class CreateSession extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = SessionResource::class;
}
