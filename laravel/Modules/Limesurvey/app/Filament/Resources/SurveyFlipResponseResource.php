<?php

declare(strict_types=1);

namespace Modules\Limesurvey\Filament\Resources;

use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
// Ensure this is still included for potential future use
use Filament\Forms\Components\DateTimePicker;
use Modules\Limesurvey\Models\SurveyFlipResponse;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Limesurvey\Filament\Resources\SurveyFlipResponseResource\Pages;

class SurveyFlipResponseResource extends XotBaseResource
{
    protected static ?string $model = SurveyFlipResponse::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack'; // Updated navigation icon
    protected static ?string $navigationGroup = 'Limesurvey';
    //protected static ?string $label = 'Survey Flip Response';
    //protected static ?string $pluralLabel = 'Survey Flip Responses';

    //protected static string $slug = 'survey-flip-responses';

    public static function getFormSchema(): array
    {
        return [
                TextInput::make('survey_id')
                    ->required(),
                TextInput::make('token')
                    ->required(),
                TextInput::make('answer')
                    ->required(),
                TextInput::make('value')
                    ->required(),
                DateTimePicker::make('submitdate')
                    ->required(),
                TextInput::make('fieldname')
                    ->required(),
            ];
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSurveyFlipResponses::route('/'),
            'create' => Pages\CreateSurveyFlipResponse::route('/create'),
            'edit' => Pages\EditSurveyFlipResponse::route('/{record}/edit'),
        ];
    }
}
