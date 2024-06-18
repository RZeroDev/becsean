<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automating extends Model
{
    use HasFactory;

    protected $fillable = [
        'linkedin_client_id',
        'linkedin_client_secret',
        'linkedin_page_id',
        'linkedin_access_token',
        'linkedin_callback',
        'twitter_account_id',
        'twitter_consumer_key',
        'twitter_consumer_secret',
        'twitter_bearer_token',
        'twitter_access_token',
        'twitter_access_token_secret',
        'facebook_page_id',
        'instagram_page_id',
        'facebook_access_token'
    ];
}
