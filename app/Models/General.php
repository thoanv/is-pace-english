<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'logo_white',
        'logo',
        'favicon',
        'thumbnail',
        'meta_header',
        'meta_description',
        'meta_keywords',
        'email',
        'address',
        'phone',
        'fax',
        'video_intro',
        'map',
        'facebook',
        'google',
        'youtube',
        'twitter',
        'pinterest',
        'instagram',
        'come_to_us',
        'image_left',
        'image_right',
        'tiktok',
    ];
}
