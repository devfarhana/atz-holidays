<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'button_text',
        'button_url',
        'status',
    ];
}
