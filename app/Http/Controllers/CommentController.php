<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
     public function comment(){
        return view('admin.comments',['title' => 'comments']);
    }
}