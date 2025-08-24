<?php

namespace Database\Seeders;

use App\Imports\ProvinceImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = public_path('/admin/excels/provinces.xlsx');
        Excel::import(new ProvinceImport, $filePath);
    }
}
