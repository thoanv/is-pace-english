<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description',
        'type',
        'image',
        'cover',
        'status',
        'is_outstanding',
        'created_by',
        'updated_by',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }

    // Hàm lấy tên danh mục theo ngôn ngữ
    public function getTranslation($locale)
    {
        return $this->translations->where('locale', $locale)->first();
    }

    public static function recursive($categories, $parents = 0, $level = 1, &$listCategory)
    {
        if(count($categories) > 0){
            foreach ($categories as $key => $value){
                if($value->parent_id == $parents){
                    $value->level = $level;
                    $listCategory[] = $value;
                    unset($categories[$key]);
                    $parent = $value->id;
                    self::recursive($categories, $parent, $level + 1, $listCategory);
                }
            }
        }
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function allChildrenIds()
    {
        $ids = [$this->id];

        foreach ($this->children as $child) {
            $ids = array_merge($ids, $child->allChildrenIds());
        }

        return $ids;
    }
}
