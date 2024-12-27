<?php

namespace Modules\Quaeris\Filament\Resources\PdfStyleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Quaeris\Filament\Resources\PdfStyleResource;

class EditPdfStyle extends EditRecord
{
    protected static string $resource = PdfStyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
