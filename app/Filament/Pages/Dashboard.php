<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

<<<<<<< Updated upstream
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBasePage;

class Dashboard extends XotBasePage
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBasePage;

class Dashboard extends XotBasePage
=======
use Filament\Pages\Page;

class Dashboard extends Page
>>>>>>> a5a128a (.)
=======
use Modules\Xot\Filament\Pages\XotBasePage;

class Dashboard extends XotBasePage
>>>>>>> Stashed changes
=======
use Filament\Pages\Page;

class Dashboard extends Page
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
use Modules\Xot\Filament\Pages\XotBasePage;

class Dashboard extends XotBasePage
>>>>>>> Stashed changes
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
