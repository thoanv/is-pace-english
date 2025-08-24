<?php

namespace App\Services\Systems;

use App\Enums\CommonEnum;
use App\Enums\CommonType;
use App\Services\BaseService;
use App\Repositories\Systems\PartnerRepository as PartnerRepo;
use Illuminate\Support\Facades\Auth;

class PartnerService extends BaseService
{
    protected PartnerRepo $partnerRepo;

    public function __construct(PartnerRepo $partnerRepo)
    {
        $this->partnerRepo = $partnerRepo;
    }

    public function getData($request)
    {
        return $this->partnerRepo->getData($request);
    }

    public function createData($request)
    {
//        dd($request->all());
        $data['name'] = $request['name'];
        $data['status'] = isset($request['status']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $partner = $this->partnerRepo->create($data);
        return $partner->permissions()->sync($request['selectPermissions']);
    }

    public function updateData($request, $partner)
    {
        $data['name'] = $request['name'];
        return $this->partnerRepo->update($data, $partner->id);
    }

    public function deleteData($role)
    {
        return $this->partnerRepo->delete($role->id);
    }


    public function getPermission($partner)
    {
        return $partner->permissions()->pluck('id')->toArray();
    }

    public function updatePermissionsOfPartner($partner,$arrayPermission)
    {
        return $partner->permissions()->sync($arrayPermission);
    }

    public function getAll()
    {
        return $this->partnerRepo->getAll();
    }

    public function find($id)
    {
        return $this->partnerRepo->find($id);
    }
}
