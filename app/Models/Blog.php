<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_category_id',
        'title',
        'slug',
        'description',
        'blog_image',
        'author_image',
        'date',
        'author_details',
        'author',
        'tags',
        'status',
    ];
    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }

}
