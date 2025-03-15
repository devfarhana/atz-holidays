<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageItinerary extends Model
{
    use HasFactory;
    protected $fillable = [
        'hajj_packages_id',
        'itinerary_days',
        'description',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(HajjPackage::class);
    }
}
