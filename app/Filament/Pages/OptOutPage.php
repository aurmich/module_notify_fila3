<?php

namespace Modules\Quaeris\Filament\Pages;

use Modules\Quaeris\Filament\Widgets;

class OptOutPage extends BasePageExport
{
    protected static ?string $navigationLabel = 'OptOut';

    protected static ?string $title = 'OptOut';

    protected static string $routePath = 'opt-out';

    public function getWidgets(): array
    {
        return [
            Widgets\StatsOverviewWidget::class,
            Widgets\OptOutWidget::class,
        ];
    }
}
