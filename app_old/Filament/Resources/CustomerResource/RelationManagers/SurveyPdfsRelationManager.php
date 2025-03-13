<?php

namespace Modules\Quaeris\Filament\Resources\CustomerResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource;

class SurveyPdfsRelationManager extends RelationManager
{
    protected static string $relationship = 'surveyPdfs';

    protected static ?string $recordTitleAttribute = 'id';

    public function form(Form $form): Form
    {
        return SurveyPdfResource::form($form);
        /*
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(255),
            ]);
        */
    }

    public function table(Table $table): Table
    {
        return SurveyPdfResource::table($table);

    }
}
