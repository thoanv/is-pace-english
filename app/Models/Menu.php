<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'name',
        'content',
        'status',
        'list_id_category',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'content' => 'array'
    ];
}
