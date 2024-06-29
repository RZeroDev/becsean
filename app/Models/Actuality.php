<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actuality extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'pdf',
        'video',
        'status',
        'description',
        'facebook_post_id',
        'instagram_post_id',
        'twitter_post_id',
        'linkedin_post_id',
        'actualities_categorie_id' 
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
