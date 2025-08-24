<?php

namespace App\Services;

use App\Enums\CommonEnum;
use App\Repositories\PostRepository as Repo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

//use CourseTra
class PostService extends BaseService
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
            $data = $request->only('category_id', 'title', 'description', 'content', 'image');
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['date_publish'] = Carbon::parse($request->date_publish)->format('Y-m-d H:i:s');
            $data['created_by'] = Auth::id();
            $data['updated_by'] = Auth::id();
            $result = $this->repo->create($data);
            $data = [];
            $data['slug'] = Str::slug($result['title']).'-'.$result['id'];
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
            $data = $request->only('category_id', 'title', 'description', 'content', 'image');
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['date_publish'] = Carbon::parse($request->date_publish)->format('Y-m-d H:i:s');
            $data['updated_by'] = Auth::id();
            $data['slug'] = Str::slug($data['title']).'-'.$item['id'];
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

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }

    public function posts()
    {
        return $this->repo->posts();
    }

    public function getListPosts($request){
        return $this->repo->getListPosts($request);
    }
}
