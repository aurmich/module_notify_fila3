<?php

declare(strict_types=1);

namespace Modules\Xot\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Pages\MainDashboard;
>>>>>>> c605e84 (redirect for who has only a module)
=======
>>>>>>> b2ca65e (Check & fix styling)
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Filament\Pages\MainDashboard;

abstract class XotBaseMainPanelProvider extends PanelProvider
{
    protected bool $topNavigation = false;

    public function panel(Panel $panel): Panel
    {
        $metatag = MetatagData::make();

        $panel = $panel
            // ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->sidebarFullyCollapsibleOnDesktop()
            ->colors([
                'primary' => Color::Amber,
            ])
             // ---METATAG
            ->brandLogo($metatag->getLogoHeader())
            ->brandName($metatag->title)
             // ---------------------
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                MainDashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
        $navs = app(GetModulesNavigationItems::class)->execute();

        $panel->navigationItems($navs);

        return $panel;
    }
}
