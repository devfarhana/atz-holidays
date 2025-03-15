<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'mission_title',
        'vision_title',
        'mission_description',
        'vision_description',
    ];
}
