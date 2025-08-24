<?php

namespace App\Repositories;

use App\Enums\CommonEnum;
use App\Models\Menu;
use App\Repositories\Support\AbstractRepository;

class MenuRepository extends AbstractRepository
{
    public function model()
    {
        return Menu::class;
    }

    public function getAll()
    {
        return $this->model->orderBy('id', 'DESC')->get();
    }

}
