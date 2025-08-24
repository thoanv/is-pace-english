<?php
namespace App\Services;

use App\Enums\CommonEnum;
use App\Repositories\CenterRepository as CenterRepo;
use App\Repositories\Centers\CenterTranslationRepository as CenterTranslationRepo;
use App\Services\Centers\CenterTranslationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CenterService extends BaseService
{
    protected CenterRepo $repo;

    public function __construct(
        CenterRepo $repo,
    )
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
            $data = $request->only('image', 'parent_id', 'code', 'phone', 'province_id', 'district_id','map');
            $data['type'] = CommonEnum::CENTER;
            $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
            $data['created_by'] = Auth::id();
            $data['updated_by'] = Auth::id();
            $result = $this->repo->create($data);
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
            $data = $request->only('image', 'parent_id', 'code', 'phone', 'province_id', 'district_id');
            $data['type'] = CommonEnum::CENTER;
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

    public function deleteData($item)
    {
        $this->translationRepo->deleteTrans($item); // Xoa ngon ngu bang phu
        return $this->repo->delete($item->id);
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }
    public function getListCenterWithLocale($locale)
    {
        return $this->repo->getListCenterWithLocale($locale);
    }

    public function getZones($locale = 'vi')
    {
        return $this->repo->getZones($locale);
    }

    public function getZonesWithCenters()
    {
        return $this->repo->getZonesWithCenters();
    }
}
