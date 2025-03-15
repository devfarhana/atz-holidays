<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'title',
        'location',
        'description',
        'image',
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class);
    }
}
