<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPolitique extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstTitle',
        'secondTitle',
        'firstDescription',
        'secondDescription',
    ];
}
