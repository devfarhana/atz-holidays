<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_name',
        'slug',
        'location',
        'country',
        'price',
        'duration',
        'category_id',
        'offer',
        'map_url',
        'holiday_theme',
        'status',
    ];



    public function category()
    {
        return $this->belongsTo(PackageCategory::class);
    }
    public function features()
    {
        return $this->hasMany(PackageFeature::class);
    }
    public function media()
    {
        return $this->hasMany(PackageMedia::class, 'package_id', 'id');
    }

}
