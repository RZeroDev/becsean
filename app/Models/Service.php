<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'slug',
        'description',
        'main_image',
    ];

    public function underservices()
    {
        return $this->hasMany(UnderService::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
