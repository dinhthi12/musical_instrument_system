<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = [
        'ward_name',
        'ward_type',
        'district_id',
    ];

    // Quan hệ với bảng 'users'
    public function users()
    {
        return $this->hasMany(User::class, 'ward_id');
    }

    // Quan hệ với bảng 'district'
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
