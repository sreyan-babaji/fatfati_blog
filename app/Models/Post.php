<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
        use HasFactory; 

    protected $fillable = [
        'id',
        'post_category',
        'post_title',
        'post_img',
        'post_content',
        'author',
        'slug',
        'created_at',
        'updated_at'
    ];
}
