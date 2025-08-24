<?php

namespace Database\Seeders;

use App\Imports\PermissionImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = public_path('/admin/excels/permission.xlsx');
        Excel::import(new PermissionImport(), $path);
    }
}
