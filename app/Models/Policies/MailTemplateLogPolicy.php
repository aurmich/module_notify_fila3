<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\MailTemplateLog;
use Modules\Xot\Contracts\UserContract;

class MailTemplateLogPolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('mail_template_log.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, MailTemplateLog $mail_template_log): bool
    {
        return $user->hasPermissionTo('mail_template_log.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('mail_template_log.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, MailTemplateLog $mail_template_log): bool
    {
        return $user->hasPermissionTo('mail_template_log.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, MailTemplateLog $mail_template_log): bool
    {
        return $user->hasPermissionTo('mail_template_log.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, MailTemplateLog $mail_template_log): bool
    {
        return $user->hasPermissionTo('mail_template_log.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, MailTemplateLog $mail_template_log): bool
    {
        return $user->hasPermissionTo('mail_template_log.forceDelete');
    }
}