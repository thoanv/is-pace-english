<?php
namespace App\Repositories;

use App\Enums\CategoryEnum;
use App\Enums\CommonEnum;
use App\Models\Category;
use App\Repositories\Support\AbstractRepository;

class CategoryRepository extends AbstractRepository
{
    /**
     * @return mixed|string
     */
    public function model()
    {
        return Category::class;
    }

    public function getData($request)
    {
        $query = $this->model;

        if ($request->key) {
            $query = $query->where(function ($query) use ($request) {
                $query->where('categories.name', 'like', '%' . $request->key . '%');
            });
        }

        if ($request->status) {
            $query = $query->where('categories.status', $request->status);
        }

        return $query->orderBy('categories.id', 'DESC')
            ->paginate(20)
            ->appends($request->query());
    }


    public function getAll()
    {
        return $this->model->get();
    }

    public function getAllByStatus($status = CommonEnum::ACTIVATED)
    {
        return $this->model->where('status', $status)->get();
    }
    public function getCategoryByStatusAndType($type = CategoryEnum::TIN_TUC, $status = CommonEnum::ACTIVATED)
    {
        return $this->model->where([['status', $status],['type', $type]])->orderBy('id', 'DESC')->get();
    }
    public function checkIdBelongParentId($item)
    {
        return $this->model->where('parent_id', $item->id)->first();
    }
    public function getByParentId($parentId)
    {
        return $this->model->where('parent_id', $parentId)->get();
    }

    public function getCategoryBySlug($slug)
    {
        return $this->model->where([['status', CommonEnum::ACTIVATED], ['slug', $slug]])->first();
    }
    public function getLists()
    {
        return $this->model->where('status', CommonEnum::ACTIVATED)->get();
    }
}
