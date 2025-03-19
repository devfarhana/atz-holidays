<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_tour_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address_1',
        'address_2',
        'city',
        'state',
        'select_country',
        'zip_code',
        'additional_info'
    ];

    public function package()
    {
        return $this->belongsTo(PackageTour::class, 'package_tour_id');
    }
}
