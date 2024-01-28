<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newfeeds_translations extends Model
{
    use HasFactory;
    protected $table = 'Newfeeds_translations';
    protected $fillable = [
        'headline',
        'content',
        'status',
        'excerpt',
        'featured_image'
    ];

    public function newfeeds()
    {
        return $this->belongsTo(Newfeed::class, 'newfeeds_id');
    }
}
