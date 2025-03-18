<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackage extends Model
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
        return $this->hasMany(HajjPackageFeature::class, 'hajj_packages_id', 'id');
    }
    public function media()
    {
        return $this->hasMany(HajjPackageImages::class, 'hajj_packages_id', 'id');
    }
    public function video()
    {
        return $this->hasMany(HajjPackageVideo::class, 'hajj_packages_id', 'id');
    }
    public function activity()
    {
        return $this->hasMany(HajjPackageActivity::class, 'hajj_packages_id', 'id');
    }
    public function itinerary()
    {
        return $this->hasMany(HajjPackageItinerary::class, 'hajj_packages_id', 'id');
    }
    public function inclusion()
    {
        return $this->hasMany(HajjPackageInclusion::class, 'hajj_packages_id', 'id');
    }
    public function exclusion()
    {
        return $this->hasMany(HajjPackageExclusion::class, 'hajj_packages_id', 'id');
    }
    public function policy()
    {
        return $this->hasMany(HajjPackagePolicy::class, 'hajj_packages_id', 'id');
    }
    public function hotel()
    {
        return $this->hasMany(HajjPackageHotel::class, 'hajj_packages_id', 'id');
    }
}
