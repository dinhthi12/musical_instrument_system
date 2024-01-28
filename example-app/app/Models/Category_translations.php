<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_translations extends Model
{
    use HasFactory;

    protected $table = 'category_translations';
    protected $fillable = ['category_name', 'category_image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function parent()
    {
        return $this->belongsTo(Category_translations::class, 'parent_id');
    }

    // Quan hệ với các danh mục con
    public function children()
    {
        return $this->hasMany(Category_translations::class, 'parent_id');
    }
}
