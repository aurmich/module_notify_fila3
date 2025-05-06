<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
=======
// use Illuminate\Support\Facades\Notification;
>>>>>>> 185a07e (.)
use Modules\Xot\Providers\XotBaseServiceProvider;

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

<<<<<<< HEAD
    /**
     * @var string
     */
    protected string $module_dir = __DIR__;

    /**
     * @var string
     */
    protected string $module_ns = __NAMESPACE__;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        parent::register();

        // Registra i binding per le interfacce
        $this->app->singleton('notify.manager', function ($app) {
            return new \Modules\Notify\Services\NotificationManager();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return [
            'notify.manager',
        ];
=======
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();
>>>>>>> 185a07e (.)
    }
}
