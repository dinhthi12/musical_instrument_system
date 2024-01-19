<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'district_name',
        'district_type',
        'lat',
        'lng',
        'province_id',
    ];

    // Quan hệ với bảng 'users'
    public function users()
    {
        return $this->hasMany(User::class, 'district_id');
    }

    // Quan hệ với bảng 'wards'
    public function wards()
    {
        return $this->hasMany(Ward::class, 'district_id');
    }

    // Quan hệ với bảng 'province'
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
