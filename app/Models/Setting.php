<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_phone',
        'company_phone1',
        'company_email',
        'company_headquarters',
        'company_facebook',
        'company_instagram',
        'company_twitter',
        'company_tiktok',
        'company_youtube',
        'company_linkedin',
        'analytics'
    ];
}
