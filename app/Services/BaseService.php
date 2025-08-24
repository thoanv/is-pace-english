<?php

namespace App\Services;

use App\Repositories\Support\AbstractRepository;

class BaseService
{
    /**
     *
     * @var AbstractRepository
     */
    protected $repository;


    /**
     * get list
     *
     * @return mixed
     */
    public function getAll()
    {
        return $this->repository->getAll();
    }

    /**
     * find item by id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }
}
