<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\Notification;
use Modules\Xot\Contracts\UserContract;

class NotificationPolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Notification $notification): bool
    {
        return $user->hasPermissionTo('notification.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, Notification $notification): bool
    {
        return $user->hasPermissionTo('notification.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Notification $notification): bool
    {
        return $user->hasPermissionTo('notification.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Notification $notification): bool
    {
        return $user->hasPermissionTo('notification.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Notification $notification): bool
    {
        return $user->hasPermissionTo('notification.forceDelete');
    }
}