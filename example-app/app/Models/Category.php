<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'category_image', 'parent_id'];
    // Quan hệ với chính nó (danh mục cha)
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Quan hệ với các danh mục con
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Quan hệ tự liên kết với chính nó
    public function subcategories()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
