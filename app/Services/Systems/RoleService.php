<?php

namespace App\Services\Systems;

use App\Enums\CommonEnum;
use App\Services\BaseService;
use App\Repositories\Systems\RoleRepository as RoleRepo;
use Illuminate\Support\Facades\Auth;

class RoleService extends BaseService
{
    protected RoleRepo $roleRepo;

    public function __construct(RoleRepo $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }

    public function getData($request)
    {
        return $this->roleRepo->getData($request);
    }

    public function createData($request)
    {
//        dd($request->all());
        $data['name'] = $request['name'];
        $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $role = $this->roleRepo->create($data);
        return $role->permissions()->sync($request['selectPermissions']);
    }

    public function updateData($request, $role)
    {
        $data['name'] = $request['name'];
        $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['updated_by'] = Auth::id();
        $role->permissions()->sync([]);
        $this->roleRepo->update($data, $role->id);
        return $role->permissions()->sync($request['selectPermissions']);
    }

    public function deleteData($role)
    {
        return $this->roleRepo->delete($role->id);
    }


    public function getPermission($role)
    {
        return $role->permissions()->pluck('id')->toArray();
    }

    public function updatePermissionsOfRole($role,$arrayPermission)
    {
        return $role->permissions()->sync($arrayPermission);
    }

    public function getAll()
    {
        return $this->roleRepo->getAll();
    }

    public function find($id)
    {
        return $this->roleRepo->find($id);
    }
}
