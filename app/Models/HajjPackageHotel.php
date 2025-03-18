<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageHotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'hajj_packages_id',
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
        return $this->belongsTo(HajjPackage::class);
    }
}
