<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnderService extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'slug',
        'description',
        'image',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
