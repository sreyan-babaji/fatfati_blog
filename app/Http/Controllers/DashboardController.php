<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class DashboardController extends Controller
{
   public function admin_dashboard(){
        $categories=Category::select('id','category_name')->first();
        $all_post=Post::select('id','post_category','post_title','post_img','post_content','author','slug','created_at','updated_at')->get();
        $post_count=Post::count();
        $user_count=User::count();
        $comment_count=Comment::count();
        $category_count=Category::count();
        return view('admin.dashboard',compact('all_post','post_count','category_count','user_count','comment_count','categories'),['title' => 'dashboard']);
    }
}