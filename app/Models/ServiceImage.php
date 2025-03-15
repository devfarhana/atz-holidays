<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'image',
    ];

    public function our_service()
    {
        return $this->belongsTo(OurService::class);
    }
}
