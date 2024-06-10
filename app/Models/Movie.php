<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'rating',
        'release_date',
        'description',
        'main_image',
        'other_images'
    ];

    protected $casts = [
        'other_images' => 'array'
    ];

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

}
