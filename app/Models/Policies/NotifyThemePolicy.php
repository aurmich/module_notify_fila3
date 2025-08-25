<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\NotifyTheme;
use Modules\Xot\Contracts\UserContract;

class NotifyThemePolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('notify_theme.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, NotifyTheme $notify_theme): bool
    {
        return $user->hasPermissionTo('notify_theme.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('notify_theme.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, NotifyTheme $notify_theme): bool
    {
        return $user->hasPermissionTo('notify_theme.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, NotifyTheme $notify_theme): bool
    {
        return $user->hasPermissionTo('notify_theme.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, NotifyTheme $notify_theme): bool
    {
        return $user->hasPermissionTo('notify_theme.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, NotifyTheme $notify_theme): bool
    {
        return $user->hasPermissionTo('notify_theme.forceDelete');
    }
}