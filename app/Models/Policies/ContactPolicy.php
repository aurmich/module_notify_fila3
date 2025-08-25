<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Modules\Notify\Models\Contact;
use Modules\Xot\Contracts\UserContract;

class ContactPolicy extends NotifyBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('contact.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Contact $contact): bool
    {
        return $user->hasPermissionTo('contact.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('contact.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, Contact $contact): bool
    {
        return $user->hasPermissionTo('contact.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Contact $contact): bool
    {
        return $user->hasPermissionTo('contact.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Contact $contact): bool
    {
        return $user->hasPermissionTo('contact.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Contact $contact): bool
    {
        return $user->hasPermissionTo('contact.forceDelete');
    }
}