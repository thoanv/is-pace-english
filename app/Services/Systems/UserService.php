<?php


namespace App\Services\Systems;

use App\Enums\CommonEnum;
use App\Services\BaseService;
use App\Models\User;
use App\Repositories\Systems\UserRepository as UserRepo;
use App\Repositories\Systems\UserRoleRepository as UserRoleRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserService extends BaseService
{
    protected UserRepo $userRepo;
    protected UserRoleRepo $userRoleRepo;


    public function __construct(
        UserRepo $userRepo,
        UserRoleRepo $userRoleRepo
    )
    {
        $this->userRepo = $userRepo;
        $this->userRoleRepo = $userRoleRepo;
    }

    public function getData($request)
    {
        return $this->userRepo->getData($request);
    }

    public function getRole($user)
    {
        return $user->roles()->pluck('id')->toArray();
    }


    public function updateUserRoles($user,$arrayRole)
    {
        return $user->roles()->sync($arrayRole);
    }

    public function find($id)
    {
        return $this->userRepo->find($id);
    }
    public function createData($request)
    {
        $data = $request->only('name', 'email', 'image', 'phone');
        $data['is_admin'] = isset($request['is_admin']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['is_login'] = isset($request['is_login']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['password'] = Hash::make('Scots@2025');
        $user = $this->userRepo->create($data);
        if($data['is_admin'] ==  CommonEnum::UNACTIVATED){
            return $user->roles()->sync([$request->role_id]);
        }
        return $user;
    }
    public function updateData($request, $user)
    {
        $data = $request->only('name');
        $data['is_admin'] = isset($request['is_admin']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $data['is_login'] = isset($request['is_login']) ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED;
        $this->userRepo->update($data, $user['id']);
        if ($data['is_admin'] == CommonEnum::ACTIVATED) {
            $user->roles()->sync([]); // Xóa tất cả roles
        } else {
            // Nếu có role_id hợp lệ, cập nhật roles
            if (!empty($request->role_id)) {
                $user->roles()->sync([$request->role_id]);
            }
        }
        return $user;
    }
    public function deleteData($role)
    {
        return $this->userRepo->delete($role->id);
    }
}
