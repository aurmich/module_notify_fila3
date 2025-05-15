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
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
use Filament\SpatieLaravelTranslatablePlugin;
=======
>>>>>>> a5a128a (.)
=======
use Filament\SpatieLaravelTranslatablePlugin;
>>>>>>> Stashed changes
=======
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
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
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
    { 
        $panel->plugins([
            SpatieLaravelTranslatablePlugin::make(),
        ]);
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
    {
>>>>>>> a5a128a (.)
=======
>>>>>>> Stashed changes
=======
    {
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
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
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
       

        return parent::panel($panel);
    }
}

<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
        return parent::panel($panel);
    }
}
>>>>>>> a5a128a (.)
=======
>>>>>>> Stashed changes
=======
        return parent::panel($panel);
    }
}
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
