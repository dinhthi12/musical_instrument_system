<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['education_name', 'education_type'];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
