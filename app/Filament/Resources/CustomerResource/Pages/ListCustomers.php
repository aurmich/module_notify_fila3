<?php

declare(strict_types=1);

namespace Modules\Quaeris\Filament\Resources\CustomerResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\Quaeris\Filament\Resources\CustomerResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListCustomers extends XotBaseListRecords
{
    protected static string $resource = CustomerResource::class;

    public function getListTableColumns(): array
    {
        return [
            // Tables\Columns\TextColumn::make('id'),
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            /*
                Tables\Columns\TextColumn::make('survey_pdfs_count')
                    ->counts('surveyPdfs'),
                */
            // ChildResourceLink::make(SurveyPdfResource::class),
        ];
    }
}
