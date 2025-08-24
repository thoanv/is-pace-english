<?php

namespace App\Repositories;

use App\Enums\CommonEnum;
use App\Models\Course;
use App\Repositories\Support\AbstractRepository;

class CourseRepository extends AbstractRepository
{
    public function model()
    {
        return Course::class;
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
    public function courses()
    {
        return $this->model->where('status', CommonEnum::ACTIVATED)->take(5)->get();
    }
    public function getCourseBySlug($slug)
    {
        return $this->model->where([['status', CommonEnum::ACTIVATED], ['slug', $slug]])->first();
    }
    public function getCourseOthers($item)
    {
        return $this->model->where([['status', CommonEnum::ACTIVATED], ['id','<>' ,$item['id']]])->take(3)->orderBy('id', 'DESC')->get();
    }
}
