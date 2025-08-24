<?php


namespace App\Services;


use App\Repositories\DistrictRepository as DistrictRepo;

class DistrictService extends BaseService
{

    protected DistrictRepo $districtRepo;


    public function __construct(DistrictRepo $districtRepo)
    {
        $this->districtRepo = $districtRepo;
    }

    public function getData($request)
    {
        return $this->districtRepo->getAll($request);
    }
    public function getDistrictByProvinceId($provinceId)
    {
        return $this->districtRepo->getDistrictByProvinceId($provinceId);
    }
}
