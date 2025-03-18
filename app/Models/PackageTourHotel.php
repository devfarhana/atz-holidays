<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourHotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'hotel_name',
        'location',
        'details',
        'rating',
        'number_review',
        'image',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class);
    }
}
