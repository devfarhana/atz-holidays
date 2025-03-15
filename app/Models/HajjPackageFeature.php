<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'hajj_packages_id',
        'feature_title',
        'icon'
    ];

    public function package()
    {
        return $this->belongsTo(HajjPackage::class);
    }
}
