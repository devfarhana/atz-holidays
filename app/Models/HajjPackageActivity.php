<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageActivity extends Model
{
    use HasFactory;
    protected $fillable = [

        'hajj_packages_id',
        'title',
        'location',
        'description',
        'image',
    ];

    public function package()
    {
        return $this->belongsTo(HajjPackage::class);
    }
}
