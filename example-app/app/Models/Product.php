<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_price',
        'product_image',
        'product_view',
        'product_quantity',
        'product_detail',
        'product_discount',
        'product_hot',
        'product_status',
        'category_id',
    ];

    // Quan hệ với danh mục sản phẩm
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
