<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'experience_txt',
        'year_of_experience',
        'breadcrumb_image',
        'about_img_1',
        'about_img_2',
        'about_img_3',
        'about_img_4',
    ];
}
