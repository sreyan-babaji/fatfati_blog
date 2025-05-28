<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
           use HasFactory; 

    protected $fillable = [
        'id',
        'category_name',
        'category_description',
        'category_slug',
        'category_img',
        'updated_at',
        'created_at'
    ];
}
