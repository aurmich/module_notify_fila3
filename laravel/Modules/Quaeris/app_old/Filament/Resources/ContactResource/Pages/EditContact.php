<?php

declare(strict_types=1);

namespace Modules\Quaeris\Filament\Resources\ContactResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Quaeris\Filament\Resources\ContactResource;

class EditContact extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    // use \SevendaysDigital\FilamentNestedResources\ResourcePages\NestedPage;
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
