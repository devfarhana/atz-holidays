<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTour extends Model
{
    use HasFactory;
    protected $fillable = [
      'package_name',
        'slug',
        'location',
        'country',
        'price',
        'duration',
        'offer',
        'map_url',
        'holiday_theme',
        'hot_deal',
        'description',
        'start_point',
        'end_point',
        'route',
        'status',
    ];
    protected $attributes = [
        'category_id' => 1,
    ];


    public function features()
    {
        return $this->hasMany(PackageTourFeature::class, 'package_tour_id', 'id');
    }
    public function media()
    {
        return $this->hasMany(PackageTourImages::class, 'package_tour_id', 'id');
    }
    public function video()
    {
        return $this->hasMany(PackageTourVideo::class, 'package_tour_id', 'id');
    }
    public function activity()
    {
        return $this->hasMany(PackageTourActivity::class, 'package_tour_id', 'id');
    }
    public function itinerary()
    {
        return $this->hasMany(PackageTourItinerary::class, 'package_tour_id', 'id');
    }
    public function inclusion()
    {
        return $this->hasMany(PackageTourInclusion::class, 'package_tour_id', 'id');
    }
    public function exclusion()
    {
        return $this->hasMany(PackageTourExclusion::class, 'package_tour_id', 'id');
    }
    public function policy()
    {
        return $this->hasMany(PackageTourPolicy::class, 'package_tour_id', 'id');
    }
}
