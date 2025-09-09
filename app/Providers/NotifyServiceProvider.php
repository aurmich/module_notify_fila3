<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

// use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
=======
>>>>>>> 2b275b1a (.)
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
=======
>>>>>>> 2b275b1a (.)
use Modules\Xot\Providers\XotBaseServiceProvider;

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
=======
>>>>>>> 2b275b1a (.)
        //if (! app()->environment('production')) {
            $mail=TenantService::config('mail');
            Assert::isArray($mail);
            $fallback_to=Arr::get($mail,'fallback_to',null);
            if(is_string($fallback_to)){
                Mail::alwaysTo($fallback_to);
            }
       // }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
=======
>>>>>>> 2b275b1a (.)
    }
}
