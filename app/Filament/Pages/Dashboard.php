<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
=======

class Dashboard extends XotBasePage
>>>>>>> 9fd314be (.)
=======
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
>>>>>>> c0f200e (.)
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'notify::filament.pages.dashboard';

    public function mount(): void
    {
        /*
        $user = auth()->user();
        if (! $user->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
    }
}
