<?php

namespace App\Models\Systems;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'key',
        'value',
        'type_permission_id',
        'status',
        'created_by',
        'updated_by'
    ];

    public function roles()
    {
        return $this->morphToMany(Role::class, 'role_permissions');
    }
    public function rolePermissions()
    {
        return $this->hasMany(PermissionRole::class, 'permission_id');
    }

}
