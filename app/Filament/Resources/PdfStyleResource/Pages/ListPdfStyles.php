<?php

namespace Modules\Quaeris\Filament\Resources\PdfStyleResource\Pages;

use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Modules\Quaeris\Filament\Resources\PdfStyleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListPdfStyles extends XotBaseListRecords
{
    protected static string $resource = PdfStyleResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')->sortable(),

            ColorColumn::make('color')->sortable(),
            ColorColumn::make('bg_color')->sortable(),
            TextColumn::make('font_family')->sortable(),
            TextColumn::make('font_size')->sortable(),
            TextColumn::make('font_style')->sortable(),

            TextColumn::make('backtop')->sortable(),
            TextColumn::make('backbottom')->sortable(),
            TextColumn::make('backleft')->sortable(),
            TextColumn::make('backright')->sortable(),
            TextColumn::make('font_size_question')->sortable(),
        ];
    }
}
