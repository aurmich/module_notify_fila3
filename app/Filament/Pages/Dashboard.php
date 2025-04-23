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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $user?->hasRole('super-admin')) {
=======
        if (! $user->hasRole('super-admin')) {
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
=======
>>>>>>> a2dd458 (fix: auto resolve conflict)
=======
>>>>>>> f58c718 (.)
        if (! $user->hasRole('super-admin')) {
        if (! $user->hasRole('super-admin')) {
        if (! $user?->hasRole('super-admin')) {
<<<<<<< HEAD
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
<<<<<<< HEAD
>>>>>>> 06e3ad9 (fix: auto resolve conflict)
=======
=======
        if (! $user?->hasRole('super-admin')) {
>>>>>>> ba48b8c (.)
>>>>>>> a2dd458 (fix: auto resolve conflict)
            redirect('/admin');
=======
          if (! $user?->hasRole('super-admin')) {
             redirect('/admin');
>>>>>>> f58c718 (.)
        }
        */
    }
}
