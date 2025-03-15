<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'image',
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class);
    }
}
