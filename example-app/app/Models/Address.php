<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'province_id',
        'district_id',
        'ward_id',
        'status',
    ];
     // Quan hệ với bảng 'provinces'
     public function province()
     {
         return $this->belongsTo(Province::class, 'province_id');
     }

     // Quan hệ với bảng 'districts'
     public function district()
     {
         return $this->belongsTo(District::class, 'district_id');
     }

     // Quan hệ với bảng 'wards'
     public function ward()
     {
         return $this->belongsTo(Ward::class, 'ward_id');
     }
     public function users()
     {
         return $this->belongsToMany(User::class, 'user_addresses', 'address_id', 'user_id');
     }
}
