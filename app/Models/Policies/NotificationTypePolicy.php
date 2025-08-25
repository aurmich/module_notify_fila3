<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\NotificationType;
use Modules\Xot\Contracts\UserContract;

class NotificationTypePolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification_type.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, NotificationType $notification_type): bool
    {
        return $user->hasPermissionTo('notification_type.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification_type.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, NotificationType $notification_type): bool
    {
        return $user->hasPermissionTo('notification_type.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, NotificationType $notification_type): bool
    {
        return $user->hasPermissionTo('notification_type.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, NotificationType $notification_type): bool
    {
        return $user->hasPermissionTo('notification_type.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, NotificationType $notification_type): bool
    {
        return $user->hasPermissionTo('notification_type.forceDelete');
    }
}