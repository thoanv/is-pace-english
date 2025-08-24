<?php
namespace App\Repositories\Systems;

use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\Systems\TypePermission;

class TypePermissionRepository extends AbstractRepository
{
    public function model(){
        return TypePermission::class;
    }
    public function getTypePermissions()
    {
        return $this->model->orderBy('ID', 'DESC')->paginate();
    }
    public function getTypePermissionByStatus($status)
    {
        return $query = $this->model->where('status', $status)->get();

    }
    public function getData()
    {
        return $this->model->orderBy('ID', 'DESC')->get();

    }
}
