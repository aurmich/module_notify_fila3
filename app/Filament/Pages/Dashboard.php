<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'notify::filament.pages.dashboard';

    public function mount(): void
    {
        /*
        $user = auth()->user();
<<<<<<< HEAD
        if (! $user->hasRole('super-admin')) {
=======
        if (! $user?->hasRole('super-admin')) {
>>>>>>> 9165bf1 (.)
            redirect('/admin');
        }
        */
    }
}
