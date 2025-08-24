<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use App\Services\DistrictService;

class DistrictController extends Controller
{
    protected DistrictService $districtService;
    public function __construct(DistrictService $districtService)
    {
        $this->districtService = $districtService;
    }
    public function getDistrictByProvinceId($provinceId)
    {
        $lists =  $this->districtService->getDistrictByProvinceId($provinceId);
        return response()->json([
            'success' => true,
            'data' => $lists
        ]);
    }
}
