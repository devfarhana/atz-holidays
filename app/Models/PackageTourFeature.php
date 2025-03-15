<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'feature_title',
        'icon'
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class);
    }
}
