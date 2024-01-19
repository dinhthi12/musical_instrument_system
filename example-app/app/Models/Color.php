<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['color_name', 'color_price', 'color_image', 'pro_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'pro_id');
    }
}
