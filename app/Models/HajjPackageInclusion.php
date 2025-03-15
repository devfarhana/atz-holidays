<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageInclusion extends Model
{
    use HasFactory;
    protected $fillable = [
        'hajj_packages_id',
        'title',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(HajjPackage::class);
    }
}
