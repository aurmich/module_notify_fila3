<?php

namespace Modules\Quaeris\Filament\Resources\SurveyPdfResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource;

class CreateSurveyPdf extends CreateRecord
{
    //use \SevendaysDigital\FilamentNestedResources\ResourcePages\NestedPage;
    protected static string $resource = SurveyPdfResource::class;
}
