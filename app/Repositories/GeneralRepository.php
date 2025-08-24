<?php
namespace App\Repositories;

use App\Models\General;
use App\Repositories\Support\AbstractRepository;
class GeneralRepository extends AbstractRepository
{
    public function model(){
        return General::class;
    }

}
