<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'video',
        'video_url',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class);
    }
}
