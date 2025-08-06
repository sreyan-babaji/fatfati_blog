<?php

namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [
        'post_id', 'user_id', 'content', 'status'
    ];
    public function post(){
        return $this->belongsto(Post::class);
    }
}
