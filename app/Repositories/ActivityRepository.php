<?php

namespace App\Repositories;

use App\Enums\CommonEnum;
use App\Models\Activity;
use App\Repositories\Support\AbstractRepository;

class ActivityRepository extends AbstractRepository
{
    public function model()
    {
        return Activity::class;
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
        return $query->orderBy('id', 'DESC')->paginate(20)->appends($request->query());
    }

    public function getAll()
    {
        return $this->model->where('status', CommonEnum::ACTIVATED)->orderBy('id', 'DESC')->get();
    }
    public function activities()
    {
        return $this->model->where([['status', CommonEnum::ACTIVATED], ['is_outstanding', CommonEnum::ACTIVATED]])->take(6)->get();
    }
}
