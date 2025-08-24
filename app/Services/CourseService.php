<?php

namespace App\Services;

use App\Enums\CommonEnum;
use App\Repositories\CourseRepository as Repo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

//use CourseTra
class CourseService extends BaseService
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
        DB::beginTransaction();
        try {
            $data = $request->only('category_id', 'name', 'description', 'content', 'image', 'cover');
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['created_by'] = Auth::id();
            $data['updated_by'] = Auth::id();
            $result = $this->repo->create($data);
            $data = [];
            $data['slug'] = Str::slug($result['name']).'-'.$result['id'];
            $this->repo->update($data, $result['id']);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Lỗi cập nhật dữ liệu: " . $e->getMessage());
            return false;
        }
    }

    public function updateData($request, $item)
    {
        DB::beginTransaction();
        try {
            $data = $request->only('category_id', 'name', 'description', 'content', 'image', 'cover');
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['updated_by'] = Auth::id();
            $data['slug'] = Str::slug($data['name']).'-'.$item['id'];
            $this->repo->update($data, $item['id']);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            // Xử lý lỗi, ví dụ: log lỗi hoặc trả về thông báo
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function deleteData($item)
    {
        return $this->repo->delete($item->id);
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }
    public function courses(){
        return $this->repo->courses();
    }

    public function getCourseBySlug($slug){
        return $this->repo->getCourseBySlug($slug);
    }
    public function getCourseOthers($course){
        return $this->repo->getCourseOthers($course);
    }
}
