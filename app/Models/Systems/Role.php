<?php

namespace App\Models\Systems;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles','role_id','user_id');
    }

    public function rolePermissions()
    {
        return $this->hasMany(PermissionRole::class, 'permission_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_roles', 'role_id', 'permission_id');
    }
}
