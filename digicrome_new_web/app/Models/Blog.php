<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'author_name',
        'author_image',
        'heading',
        'tagline',
        'blog',
        'blog_image',
        'meta_keywords',
        'meta_description',
        'meta_title',
        'slug',
        'views',
        'status',
    ];
}
