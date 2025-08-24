<?php

namespace App\Repositories\Systems;

use App\Models\User;
use App\Repositories\Support\AbstractRepository;

class UserRepository extends AbstractRepository
{
    /**
     * @return mixed|string
     */
    public function model()
    {
        return User::class;
    }
    public function getData($request)
    {
        $query = $this->model;
        if ($request->key) {
            $query = $query->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->key . '%')
                ->orWhere('phone', 'like', '%' . $request->key . '%')
                ->orWhere('email', 'like', '%' . $request->key . '%');
            });
        }
        if ($request->is_login !== null) {
            $query = $query->where('is_login', $request->is_login);
        }
        if ($request->is_admin !== null) {
            $query = $query->where('is_admin', $request->is_admin);
        }
        return $query->orderBy('id', 'DESC')->paginate(20)->appends($request->query());
    }


}
