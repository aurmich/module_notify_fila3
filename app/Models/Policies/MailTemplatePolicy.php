<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Contracts\UserContract;

class MailTemplatePolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('mail_template.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, MailTemplate $mail_template): bool
    {
        return $user->hasPermissionTo('mail_template.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('mail_template.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, MailTemplate $mail_template): bool
    {
        return $user->hasPermissionTo('mail_template.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, MailTemplate $mail_template): bool
    {
        return $user->hasPermissionTo('mail_template.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, MailTemplate $mail_template): bool
    {
        return $user->hasPermissionTo('mail_template.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, MailTemplate $mail_template): bool
    {
        return $user->hasPermissionTo('mail_template.forceDelete');
    }
}