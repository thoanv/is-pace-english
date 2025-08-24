<?php

namespace App\Services\Systems;

use App\Services\BaseService;
use App\Repositories\Systems\PermissionRepository as PermissionRepo;

class PermissionService extends BaseService
{
    protected PermissionRepo $permissionRepo;

    public function __construct(PermissionRepo $permissionRepo)
    {
        $this->permissionRepo = $permissionRepo;
    }

    public function getData($request)
    {
        return $this->permissionRepo->getData($request);
    }

    public function createData($request)
    {
        $data['key'] = $request['key'];
        $data['value'] = $request['value'];
        $data['type_permission_id'] = $request['type_permission_id'];
        return $this->permissionRepo->create($data);
    }

    public function updateData($request, $permission)
    {
        $data['value'] = $request['value'];
        return $this->permissionRepo->update($data, $permission->id);
    }

    public function deleteData($permission)
    {
        return $this->permissionRepo->delete($permission->id);
    }
}
