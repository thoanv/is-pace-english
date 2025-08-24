<?php

namespace App\Policies;

use App\Models\Systems\Role;
use App\Models\User;
use App\Traits\HasPermissions;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    use HasPermissions;
    protected string $module = '-role';
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
        return $user->hasPermission('list'.$this->module);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Role $role): bool
    {
        return $user->hasPermission('view'.$this->module);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermission('create'.$this->module);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Role $role): bool
    {
        return $user->hasPermission('update'.$this->module);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $role): bool
    {
        return $user->hasPermission('delete'.$this->module);
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Role $role): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, Role $role): bool
    // {
    //     //
    // }
}
