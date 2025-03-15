<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourItinerary extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'itinerary_days',
        'description',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class);
    }
}
