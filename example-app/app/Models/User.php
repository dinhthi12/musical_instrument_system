<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'user_email',
        'email_verified_at',
        'user_password',
        'user_day_of_birth',
        'user_phone',
        'user_bio',
        'user_image',
        'user_gender',
        'user_google_id',
        'remember_token',
        'province_id',
        'district_id',
        'ward_id',
        'role_id',
        'education_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
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

    // Quan hệ với bảng 'roles'
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    // Quan hệ với bảng 'education'
    public function education()
    {
        return $this->belongsTo(Education::class, 'education_id');
    }
    public function addresses()
    {
        return $this->belongsToMany(Address::class, 'user_addresses', 'user_id', 'address_id');
    }
    public function newfeeds()
    {
        return $this->hasMany(Newfeed::class, 'user_id');
    }
}
