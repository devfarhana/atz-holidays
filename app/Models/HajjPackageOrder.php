<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackageOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'hajj_packages_id', 'first_name', 'last_name', 'email', 'phone',
        'address_1', 'address_2', 'city', 'state', 'country', 'zip_code', 'additional_info'
    ];

    public function package()
    {
        return $this->belongsTo(HajjPackage::class);
    }
}
