<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

<<<<<<< HEAD
use Modules\User\Models\Policies\UserBasePolicy;

abstract class NotifyBasePolicy extends UserBasePolicy {}
=======
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Modules\User\Models\Permission;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\User\Models\Policies\UserBasePolicy;

abstract class NotifyBasePolicy extends UserBasePolicy
{
    
}
>>>>>>> 2e1287d (.)
