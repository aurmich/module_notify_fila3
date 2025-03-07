<?php

declare(strict_types=1);

namespace Modules\Quaeris\Filament\Resources\SurveyPdfResource\Pages;

use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListSurveyPdfs extends XotBaseListRecords
{
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = SurveyPdfResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('survey_id'),
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            SpatieMediaLibraryImageColumn::make('logo'), // ->disk('public_html'),//->directory('uploads'),
        ];
    }
}
