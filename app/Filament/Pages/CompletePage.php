<?php

namespace Modules\Quaeris\Filament\Pages;

use Filament\Forms\Components\Select;
use Modules\Quaeris\Filament\Widgets;

class CompletePage extends BasePageExport
{
    protected static ?string $navigationLabel = 'Completa';

    protected static ?string $title = 'Completa';

    protected static string $routePath = 'complete';

    public function getFiltersExtra(): array
    {
        $extra = [];
        $extra['group'] = Select::make('group')->options($this->getGroups());

        return $extra;
    }

    public function getWidgets(): array
    {
        return [
            Widgets\StatsOverviewWidget::class,
            Widgets\CompleteAnswers::class,
        ];
    }
}
