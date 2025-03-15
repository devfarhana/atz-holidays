<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowWorkKeypoint extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'details',
        'icon_img',
        'status',
    ];
}
