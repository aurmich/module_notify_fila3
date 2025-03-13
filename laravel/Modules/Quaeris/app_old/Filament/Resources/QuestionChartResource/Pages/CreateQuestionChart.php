<?php

namespace Modules\Quaeris\Filament\Resources\QuestionChartResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Quaeris\Filament\Resources\QuestionChartResource;

class CreateQuestionChart extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    //use \SevendaysDigital\FilamentNestedResources\ResourcePages\NestedPage;
    protected static string $resource = QuestionChartResource::class;
}
