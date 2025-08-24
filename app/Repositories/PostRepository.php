<?php

namespace App\Repositories;

use App\Enums\CommonEnum;
use App\Models\Post;
use App\Repositories\Support\AbstractRepository;

class PostRepository extends AbstractRepository
{
    public function model()
    {
        return Post::class;
    }

    public function getData($request)
    {
        $query = $this->model;
        if ($request->key) {
            $query = $query->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->key . '%');
            });
        }
        if ($request->status !== null) {
            $query = $query->where('status', $request->status);
        }
        if ($request->category_id) {
            $query = $query->where('category_id', $request->category_id);
        }
        return $query->orderBy('id', 'DESC')->paginate(20)->appends($request->query());
    }

    public function getAll()
    {
        return $this->model->where('status', CommonEnum::ACTIVATED)->orderBy('id', 'DESC')->get();
    }
    public function posts()
    {
        return $this->model->where('status', CommonEnum::ACTIVATED)->take(5)->orderBy('id', 'DESC')->get();
    }

    public function getListPosts($request)
    {
        return $this->model->where('status', CommonEnum::ACTIVATED)->orderBy('id', 'DESC')->paginate(6);
    }
}
