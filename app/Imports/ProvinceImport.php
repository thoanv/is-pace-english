<?php

namespace App\Imports;

use App\Models\Province;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProvinceImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row)
        {
            if($key >0){
                Province::create([
                    'id' => $row[0],
                    'name' => $row[1],
                    'english_name' => $row[2],
                    'level' => $row[3],
                ]);
            }

        }
    }
}
