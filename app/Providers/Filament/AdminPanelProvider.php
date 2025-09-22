<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Panel;
<<<<<<< HEAD
use Filament\SpatieLaravelTranslatablePlugin;
=======
>>>>>>> 2b275b1 (.)
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
<<<<<<< HEAD
=======
use Filament\SpatieLaravelTranslatablePlugin;
>>>>>>> 2b275b1 (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

<<<<<<< HEAD
    #[\Override]
    public function panel(Panel $panel): Panel
    {
        $panel->plugins([
            SpatieLaravelTranslatablePlugin::make(),
        ]);
        if (!XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn(): string => Blade::render(
                '@livewire(\'database-notifications\')',
            ));
        }

        return parent::panel($panel);
    }
}
=======
    public function panel(Panel $panel): Panel
    { 
        $panel->plugins([
            SpatieLaravelTranslatablePlugin::make(),
        ]);
        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook(
                'panels::user-menu.before',
                static fn (): string => Blade::render('@livewire(\'database-notifications\')'),
            );
        }

       

        return parent::panel($panel);
    }
}

>>>>>>> 2b275b1 (.)
