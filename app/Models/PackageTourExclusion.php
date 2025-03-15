<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourExclusion extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'title',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class);
    }
}
