<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Newfeed extends Model
{
    use HasTranslations;

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
    public $translatable = [
        'headline',
        'content',
        'excerpt',
        'feature_image',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function translations()
    {
        return $this->hasMany(Newfeeds_translations::class);
    }
}
