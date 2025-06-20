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
        
        $all_post=Post::paginate(10);
         foreach ($all_post as $post) {
            $postcategorydata = Category::where('id',$post->post_category)->first();
            $post->postcategoryname = $postcategorydata->category_name;
        }
        $post_count= Post::count();
        $user_count=User::count();
        $comment_count=Comment::count();
        $category_count=Category::count();
        return view('admin.dashboard',compact('all_post','post_count','category_count','user_count','comment_count'),['title' => 'dashboard']);
    }
}