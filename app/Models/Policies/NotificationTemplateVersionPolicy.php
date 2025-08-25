<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\NotificationTemplateVersion;
use Modules\Xot\Contracts\UserContract;

class NotificationTemplateVersionPolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification_template_version.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, NotificationTemplateVersion $notification_template_version): bool
    {
        return $user->hasPermissionTo('notification_template_version.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('notification_template_version.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, NotificationTemplateVersion $notification_template_version): bool
    {
        return $user->hasPermissionTo('notification_template_version.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, NotificationTemplateVersion $notification_template_version): bool
    {
        return $user->hasPermissionTo('notification_template_version.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, NotificationTemplateVersion $notification_template_version): bool
    {
        return $user->hasPermissionTo('notification_template_version.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, NotificationTemplateVersion $notification_template_version): bool
    {
        return $user->hasPermissionTo('notification_template_version.forceDelete');
    }
}