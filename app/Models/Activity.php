<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'unit_id',
        'name',
        'link',
        'image',
        'status',
        'is_outstanding',
        'created_by',
        'updated_by',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function Unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

}
