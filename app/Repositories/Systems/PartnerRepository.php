<?php

namespace App\Repositories\Systems;

use App\Enums\CommonEnum;
use App\Models\Partner;
use App\Repositories\Support\AbstractRepository;

class PartnerRepository extends AbstractRepository
{
    public function model()
    {
        return Partner::class;
    }

    public function getData($request)
    {
        $query = $this->model;
        if ($request->key) {
            $query = $query->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->key . '%');
            });
        }
        if ($request->status !== null) {
            $query = $query->where('status', $request->status);
        }
        return $query->orderBy('id', 'DESC')->paginate(10);
    }

    public function getAll()
    {
        return $this->model->where('status', CommonEnum::ACTIVATED)->orderBy('id', 'DESC')->get();
    }

    public function getPartnerByName($name)
    {
        return $this->model->where('name', $name)->first();

    }
}
