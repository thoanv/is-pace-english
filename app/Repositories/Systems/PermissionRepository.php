<?php

namespace App\Repositories\Systems;

use App\Models\Systems\Permission;
use App\Repositories\Support\AbstractRepository;

class PermissionRepository extends AbstractRepository
{
    /**
     * @return mixed|string
     */
    public function model()
    {
        return Permission::class;
    }

    public function getData($request)
    {
        $query = $this->model->with('typePermission');;
        if ($request->key) {
            $query = $query->where(function ($query) use ($request) {
                $query->where('key', 'like', '%' . $request->key . '%')
                    ->orWhere('value', 'like', '%' . $request->key . '%');
            });
        }
        if ($request->status !== null) {
            $query = $query->where('status', $request->status);
        }
        if ($request->type_permission_id !== null) {
            $query = $query->where('type_permission_id', $request->type_permission_id);
        }
        return $query->orderBy('id', 'DESC')->paginate();
    }
}
