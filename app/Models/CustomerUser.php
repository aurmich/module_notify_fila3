<?php

declare(strict_types=1);

namespace Modules\Quaeris\Models;

use Modules\User\Models\TenantUser;

class CustomerUser extends TenantUser
{
    /** @var string */
    protected $connection = 'quaeris';

    // protected $table = 'tenant_user';
}
