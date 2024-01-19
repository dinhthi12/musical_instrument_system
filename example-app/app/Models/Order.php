<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['delivery_name', 'order_discount', 'order_total', 'order_status', 'note', 'user_id', 'address_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class); // Điều chỉnh tên model nếu cần thiết
    }
}
