<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'status',
    ];

    public function service_image()
    {
        return $this->hasMany(ServiceImage::class, 'service_id', 'id');
    }
    public function service_extra()
    {
        return $this->hasOne(ServiceExtra::class, 'service_id', 'id');
    }
}
