<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
        use HasFactory; 

    protected $fillable = [
        'post_category',
        'post_title',
        'post_img',
        'post_content',
        'post_status',
        'author',
        'slug'
    ];
}
