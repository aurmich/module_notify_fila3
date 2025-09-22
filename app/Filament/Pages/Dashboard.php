<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Pages\XotBasePage;

class Dashboard extends XotBaseDashboard
{
    protected static null|string $navigationIcon = 'heroicon-o-home';
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
>>>>>>> 2b275b1 (.)

    protected static string $view = 'notify::filament.pages.dashboard';

    public function mount(): void
    {
        /*
<<<<<<< HEAD
         * $user = auth()->user();
         * if (! $user->hasRole('super-admin')) {
         * redirect('/admin');
         * }
         */
=======
        $user = auth()->user();
        if (! $user->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
>>>>>>> 2b275b1 (.)
    }
}
