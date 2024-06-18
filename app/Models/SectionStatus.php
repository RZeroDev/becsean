<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionStatus extends Model
{
    use HasFactory;
    protected $fillable=[
        'service',
        'about',
        'testimonial',
        'work',
        'action',
        'actuality',
        'partner',
    ];
}
