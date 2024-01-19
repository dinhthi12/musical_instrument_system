<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        'province_name',
        'province_type',
    ];

    // Quan hệ với bảng 'users'
    public function users()
    {
        return $this->hasMany(User::class, 'province_id');
    }

    // Quan hệ với bảng 'districts'
    public function districts()
    {
        return $this->hasMany(District::class, 'province_id');
    }
}
