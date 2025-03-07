<?php

namespace Modules\Quaeris\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Quaeris\Models\Contact;
use Modules\Xot\Exports\QueryExport;

/**
 * Undocumented class
 *
 * @property array $filters
 */
class ContactWidget extends BaseTableWidget
{
    public function getTableQuery(): EloquentBuilder|Relation|null
    {
        // ----------
        $ups = Contact::where('survey_id', null)
            ->inRandomOrder()
            ->limit(100)
            ->get();

        foreach ($ups as $up) {
            $up->survey_id = $up->getSurveyId();
            $up->save();
        }
        // ---------------

        return Contact::where('survey_id', $this->getSurveyId());
    }

    protected function getTableHeaderActions(): array
    {

        return [
            Action::make('export-table-xls')
                ->label('')
                ->icon('fas-file-excel')
                ->action(function () {
                    $fields = [
                        'email',
                        'mobile_phone',
                        'token',
                        'duplicate_count',
                    ];
                    $query = $this->getTableQuery();
                    $filename = class_basename($this).'_'.$this->getSurvey()->name.'.xlsx';

                    return (new QueryExport($query, null, $fields))
                        ->download($filename);
                }),
        ];
    }

    protected function getTableColumns(): array
    {

        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('mobile_phone'),
            Tables\Columns\TextColumn::make('token'),
            Tables\Columns\TextColumn::make('email')->searchable(),
            Tables\Columns\TextColumn::make('duplicate_count'),

        ];
    }
}
