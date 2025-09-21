<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recruitment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'vi_tri',
        'bang_cap',
        'thu_nhap',
        'hinh_thuc_lam_viec',
        'noi_lam_viec',
        'kinh_nghiem',
        'cap_bac',
        'lam_viec',
        'content',
        'date_publish',
        'view',
        'status',
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
