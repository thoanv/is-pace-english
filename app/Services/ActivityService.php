<?php

namespace App\Services;

use App\Enums\CommonEnum;
use App\Repositories\ActivityRepository as Repo;
use Illuminate\Support\Facades\Auth;

class ActivityService extends BaseService
{
    protected Repo $repo;
    public function __construct(Repo $repo)
    {
        $this->repo = $repo;
    }

    public function getData($request)
    {
        return $this->repo->getData($request);
    }

    public function createData($request)
    {
        $data = $request->only('unit_id', 'name', 'link', 'image');
        $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        return $this->repo->create($data);
    }

    public function updateData($request, $item)
    {
        $data = $request->only('unit_id', 'name', 'link', 'image');
        $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['updated_by'] = Auth::id();
        return $this->repo->update($data, $item->id);
    }

    public function deleteData($item)
    {
        return $this->repo->delete($item['id']);
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }
    public function activities()
    {
        return $this->repo->activities();
    }
}
