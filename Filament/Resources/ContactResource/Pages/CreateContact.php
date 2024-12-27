<?php

namespace Modules\Quaeris\Filament\Resources\ContactResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Quaeris\Filament\Resources\ContactResource;

class CreateContact extends CreateRecord
{
    //use \SevendaysDigital\FilamentNestedResources\ResourcePages\NestedPage;
    protected static string $resource = ContactResource::class;
}
