<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

// use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Arr;
<<<<<<< HEAD
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Webmozart\Assert\Assert;
=======
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
>>>>>>> 2b275b1 (.)

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 2b275b1 (.)
    public function boot(): void
    {
        parent::boot();
        //if (! app()->environment('production')) {
<<<<<<< HEAD
        $mail = TenantService::config('mail');
        Assert::isArray($mail);
        $fallback_to = Arr::get($mail, 'fallback_to', null);
        if (is_string($fallback_to)) {
            Mail::alwaysTo($fallback_to);
        }

        // }
=======
            $mail=TenantService::config('mail');
            Assert::isArray($mail);
            $fallback_to=Arr::get($mail,'fallback_to',null);
            if(is_string($fallback_to)){
                Mail::alwaysTo($fallback_to);
            }
       // }
>>>>>>> 2b275b1 (.)
    }
}
