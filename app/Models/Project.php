<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'slug',
        'description',
        'main_image',
        'project_categorie_id',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function projectcategorie(){
        return $this->belongsTo(ProjectCategorie::class,'project_categorie_id');
    } 
}
