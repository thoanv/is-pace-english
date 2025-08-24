<?php

namespace App\Policies;

use App\Models\General;
use App\Models\User;
use App\Traits\HasPermissions;
use Illuminate\Auth\Access\Response;

class GeneralPolicy
{
    use HasPermissions;
    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, General $general): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, General $general): bool
    {
        return $user->hasPermission('update-general');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, General $general): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, General $general): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, General $general): bool
    {
        //
    }
}
