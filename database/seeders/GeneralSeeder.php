<?php

namespace Database\Seeders;

use App\Enums\CommonEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $check = DB::table('generals')->count();
        if($check == 0){
            DB::table('generals')->insert(
                [
                    'name' => '',
                    'email' => '',
                    'phone' => '',
                    'address'=> ''
                ],
            );
        }

    }
}
