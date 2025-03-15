<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'hajj_packages_id',
        'video'
    ];

    public function package()
    {
        return $this->belongsTo(HajjPackage::class, 'hajj_package_id');
    }
}
