<?php

namespace App\Imports;

use App\Enums\CommonEnum;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class TypePermissionImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key == 0) continue;
            DB::table('type_permissions')->updateOrInsert(
                ['id' => $row[0]],
                [
                    'id' => $row[0],
                    'name' => $row[1],
                    'status' => CommonEnum::ACTIVATED,
                    'created_by' => 1,
                    'updated_by' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
