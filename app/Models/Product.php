<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'status',
        'slug',
        'description',
        'main_image',
        'product_categorie_id',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function productcategories()
    {
        return $this->belongsTo(ProductCategorie::class ,'product_categorie_id');
    }
}
