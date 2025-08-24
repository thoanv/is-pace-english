<?php

namespace App\Imports;

use App\Enums\CommonEnum;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class PermissionImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if($key > 0 && $row[3]){
                DB::table('type_permissions')->updateOrInsert(
                    ['id' => $row[3]],
                    [
                        'id' => $row[3],
                        'name' => $row[4],
                        'status' => CommonEnum::ACTIVATED,
                        'created_by' => 1,
                        'updated_by' => 1,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                );
                DB::table('permissions')->updateOrInsert(
                    ['id' => $row[0]],
                    [
                        'id' => $row[0],
                        'key' => $row[1],
                        'value' => $row[2],
                        'type_permission_id' => $row[3]??0,
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
}
