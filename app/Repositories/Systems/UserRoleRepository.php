<?php

namespace App\Repositories\Systems;

use App\Models\Systems\UserRole;
use App\Repositories\Support\AbstractRepository;

class UserRoleRepository extends AbstractRepository
{
    public function model()
    {
        return UserRole::class;
    }

    public function countUserByRole($roleId)
    {
        return  $this->model->where('role_id', $roleId)->count();
    }

    public function getUserByRole($roleId)
    {
        return  $this->model->where('role_id', $roleId)->get();
    }

}
