<?php

namespace App\Services;

use App\Enums\CommonEnum;
use App\Repositories\MenuRepository as MenuRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class MenuService extends BaseService
{
    protected MenuRepo $repo;

    public function __construct(MenuRepo $repo)
    {
        $this->repo = $repo;
    }

    public function createData($request)
    {
        DB::beginTransaction();
        $data = $request->only( 'key', 'name');
        $data['content'] = json_decode($request['content'], true);
        $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['is_outstanding'] = isset($request['is_outstanding']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $this->repo->create($data);
        DB::commit();
        return true;
    }

    public function updateData($request, $item)
    {
        DB::beginTransaction();
        try {
            $data = $request->only('name');
            $data['content'] = json_decode($request['content'], true);
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['updated_by'] = Auth::id();
            // Cập nhật dữ liệu chính
            $this->repo->update($data, $item['id']);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            // Xử lý lỗi, ví dụ: log lỗi hoặc trả về thông báo
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getAll(){
        return $this->repo->getAll();
    }

    public function find($id){
        return $this->repo->find($id);
    }

}
