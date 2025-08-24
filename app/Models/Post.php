<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'slug',
        'description',
        'content',
        'view',
        'is_outstanding',
        'status',
        'date_publish',
        'stars',
        'created_by',
        'updated_by',
    ];
    protected $casts = [
        'date_publish' => 'datetime',
    ];
    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
