<?php

namespace Modules\Quaeris\Filament\Resources\ContactResource\Pages;

use Modules\Quaeris\Filament\Resources\ContactResource;

class CreateContact extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    // use \SevendaysDigital\FilamentNestedResources\ResourcePages\NestedPage;
    protected static string $resource = ContactResource::class;
}
