<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'system_name',
        'short_description',
        'address',
        'phone',
        'email',
        'logo',
        'favicon',
        'system_logo',
        'footer_text',
    ];
}
