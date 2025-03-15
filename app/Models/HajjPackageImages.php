<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'hajj_packages_id',
        'image',
    ];

    public function package()
    {
        return $this->belongsTo(HajjPackage::class);
    }
}
