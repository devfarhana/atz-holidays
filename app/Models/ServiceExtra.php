<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceExtra extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'first_title',
        'first_details',
        'second_title',
        'second_details',
        'third_title',
        'third_details',
    ];
    public function our_service()
    {
        return $this->belongsTo(OurService::class);
    }
}
