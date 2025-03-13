<?php

namespace Modules\Quaeris\Filament\Resources\PdfStyleResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Quaeris\Filament\Resources\PdfStyleResource;

class CreatePdfStyle extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = PdfStyleResource::class;
}
