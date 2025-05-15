<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Filament\SpatieLaravelTranslatablePlugin;
=======
>>>>>>> a5a128a (.)
=======
use Filament\SpatieLaravelTranslatablePlugin;
>>>>>>> Stashed changes

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

    public function panel(Panel $panel): Panel
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
    { 
        $panel->plugins([
            SpatieLaravelTranslatablePlugin::make(),
        ]);
<<<<<<< Updated upstream
=======
    {
>>>>>>> a5a128a (.)
=======
>>>>>>> Stashed changes
        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook(
                'panels::user-menu.before',
                static fn (): string => Blade::render('@livewire(\'database-notifications\')'),
            );
        }

<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
       

        return parent::panel($panel);
    }
}

<<<<<<< Updated upstream
=======
        return parent::panel($panel);
    }
}
>>>>>>> a5a128a (.)
=======
>>>>>>> Stashed changes
