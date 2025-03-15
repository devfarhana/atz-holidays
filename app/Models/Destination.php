<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'destination_name',
        'image',
        'status',
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
