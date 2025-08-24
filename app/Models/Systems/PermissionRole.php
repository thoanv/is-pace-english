<?php

namespace App\Models\Systems;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'permission_id',
        'role_id',
        'status',
        'created_by',
        'updated_by'
    ];

    public function permission()
    {
        return $this->belongsTo(Permission::class,'permission_id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
}
