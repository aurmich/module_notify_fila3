<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Widgets\EnvWidget;

class SettingPage extends XotBasePage
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 064a54f (.)
use Filament\Pages\Page;
use Modules\Xot\Filament\Widgets\EnvWidget;

class SettingPage extends Page
<<<<<<< HEAD
>>>>>>> a5a128a (.)
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Widgets\EnvWidget;

class SettingPage extends XotBasePage
>>>>>>> Stashed changes
=======
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'notify::filament.pages.setting';

    public function getHeaderWidgets(): array
    {
        $only = [
            'debugbar_enabled',
            // 'google_maps_api_key',
            'telegram_bot_token',
        ];

        return [
            EnvWidget::make(['only' => $only]),
        ];
    }
}
