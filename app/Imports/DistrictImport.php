<?php

namespace App\Imports;

use App\Models\District;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DistrictImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row)
        {
            if($key >0){
                District::create([
                    'id' => $row[0],
                    'name' => $row[1],
                    'english_name' => $row[2],
                    'level' => $row[3],
                    'province_id' => $row[4],
                    'province_name' => $row[5],
                ]);
            }

        }
    }
}
