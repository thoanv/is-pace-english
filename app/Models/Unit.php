<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'code',
        'image',
        'phone',
        'map',
        'address',
        'status',
        'created_by',
        'updated_by'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
