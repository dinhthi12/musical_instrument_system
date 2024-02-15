<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Newfeed extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline',
        'content',
        'status',
        'view',
        'like',
        'share',
        'excerpt',
        'feature_image',
        'user_id'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
