<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'service_id',
        'actuality_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function actuality()
    {
        return $this->belongsTo(Actuality::class);
    }
}
