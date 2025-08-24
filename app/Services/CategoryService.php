<?php

namespace App\Services;

use App\Enums\CommonEnum;
use App\Repositories\CategoryRepository as CategoryRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryService extends BaseService
{
    protected CategoryRepo $repo;

    public function __construct(
        CategoryRepo $repo
    )
    {
        $this->repo = $repo;
    }

    public function getData($request)
    {
        return $this->repo->getData($request);
    }

    public function getListTreeCategoryLocales(): array
    {
        $programmes = $this->repo->getAll();
        $listProgrammes = [];
        $this->recursive($programmes, $parents = 0, $level = 1, $listProgrammes);
        return $listProgrammes;
    }

    public function getListTreeCategoryByType($type = 'course'): array
    {
        $programmes = $this->repo->getCategoryByStatusAndType($type);
        $listProgrammes = [];
        $this->recursive($programmes, $parents = 0, $level = 1, $listProgrammes);
        return $listProgrammes;
    }

    public function getListTreeCategories(): array
    {
        $programmes = $this->repo->getAll();
        $listProgrammes = [];
        $this->recursive($programmes, $parents = 0, $level = 1, $listProgrammes);
        return $listProgrammes;
    }

    public function recursive($programmes, $parents = 0, $level = 1, &$listProgrammes)
    {
        if (count($programmes) > 0) {
            foreach ($programmes as $key => $value) {
                if ($value->parent_id == $parents) {
                    $value->level = $level;

                    $listProgrammes[] = $value;

                    unset($programmes[$key]);

                    $parent = $value->id;
                    self::recursive($programmes, $parent, $level + 1, $listProgrammes);
                }
            }
        }
    }

    public function createData($request)
    {
        DB::beginTransaction();
        try {
            $data = $request->only('name', 'description', 'parent_id', 'type', 'image', 'cover');
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['created_by'] = Auth::id();
            $data['updated_by'] = Auth::id();
            $data['slug'] = Str::slug($request['name']);
            $category = $this->repo->create($data);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function updateData($request, $item)
    {
        DB::beginTransaction();
        try {
            $data = $request->only('name', 'description', 'parent_id', 'type', 'image', 'cover');
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['updated_by'] = Auth::id();
            $data['slug'] = Str::slug($request['name']);
            // Cập nhật dữ liệu chính
            $this->repo->update($data, $item['id']);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function deleteData($item)
    {
        return $this->repo->delete($item->id);
    }

    public function deleteChildrenRecursive($parentId)
    {
        $children = $this->repo->getByParentId($parentId);
        // dd($children);
        foreach ($children as $child) {
            // Gọi đệ quy xóa con của con
            $this->deleteChildrenRecursive($child->id);

            // Xóa chính nó
            $this->repo->delete($child->id);
        }
    }
    public function find($id)
    {
        return $this->repo->find($id);
    }

    public function getCategoryBySlug($slug)
    {
        return $this->repo->getCategoryBySlug($slug);
    }
}
