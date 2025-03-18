<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_banner',
        'team_banner',
        'hajj_banner',
        'package_banner',
        'blog_banner',
        'faq_banner',
        'contact_banner',
        'terms_banner',
        'faq_banner',
    ];
}
