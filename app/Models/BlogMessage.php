<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_id',
        'name',
        'email',
        'message',
    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
