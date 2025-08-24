<?php


namespace App\Services;


use App\Repositories\ProvinceRepository as ProvinceRepo;

class ProvinceService extends BaseService
{

    protected ProvinceRepo $provinceRepo;


    public function __construct(ProvinceRepo $provinceRepo)
    {
        $this->provinceRepo = $provinceRepo;
    }

    public function getData($request)
    {
        return $this->provinceRepo->getAll($request);
    }
    public function getAll()
    {
        return $this->provinceRepo->getAll();
    }
}
