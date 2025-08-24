<?php


namespace App\Services\Systems;


use App\Services\BaseService;
use App\Repositories\Systems\UserRoleRepository as UserRoleRepo;
use App\Repositories\Systems\RoleRepository as RoleRepo;

class UserRoleService extends BaseService
{

    protected UserRoleRepo $userRoleRepo;
    protected RoleRepo $roleRepo;
    public function __construct(UserRoleRepo $userRoleRepo, RoleRepo $roleRepo)
    {
        $this->userRoleRepo = $userRoleRepo;
        $this->roleRepo = $roleRepo;
    }

    public function countUserByRole($roleName)
    {
        $role = $this->roleRepo->getRoleByName($roleName);
        return $this->userRoleRepo->countUserByRole($role->id);
    }
}
