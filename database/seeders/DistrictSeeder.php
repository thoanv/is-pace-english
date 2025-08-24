<?php

namespace Database\Seeders;

use App\Imports\DistrictImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = public_path('/admin/excels/districts.xlsx');
        Excel::import(new DistrictImport, $filePath);
    }
}
