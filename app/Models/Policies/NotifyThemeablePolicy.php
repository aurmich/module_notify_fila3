<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\NotifyThemeable;
use Modules\Xot\Contracts\UserContract;

class NotifyThemeablePolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('notify_themeable.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, NotifyThemeable $notify_themeable): bool
    {
        return $user->hasPermissionTo('notify_themeable.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('notify_themeable.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, NotifyThemeable $notify_themeable): bool
    {
        return $user->hasPermissionTo('notify_themeable.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, NotifyThemeable $notify_themeable): bool
    {
        return $user->hasPermissionTo('notify_themeable.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, NotifyThemeable $notify_themeable): bool
    {
        return $user->hasPermissionTo('notify_themeable.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, NotifyThemeable $notify_themeable): bool
    {
        return $user->hasPermissionTo('notify_themeable.forceDelete');
    }
}