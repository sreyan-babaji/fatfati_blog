<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogSiteController extends Controller
{
    public function blog_home(){
        $post_data=Post::select('id','post_category','post_title','post_img','post_status','post_content','author','slug','created_at','updated_at')->get();
        $title="home page";
        return view('site.blog_home',compact('post_data','title'));
    }
    public function site_article(){
        $post_data=Post::select('id','post_category','post_title','post_img','post_status','post_content','author','slug','created_at','updated_at')->get();
        return view('site.site_article',compact('post_data'),['title' => 'article']); 
    }
    public function site_category(){
        $category_data=Category::select('id','category_name','category_description','category_slug','category_img','updated_at','created_at')->get();
        $postCount = Post::where('post_category','3')->count();
       return view('site.site_category',compact('category_data','postCount'),['title' => 'category']); 
    }
    public function site_about(){
       return view('site.site_about',['title' => 'about']); 
    }
     public function site_contact(){
       return view('site.site_contact',['title' => 'contact']); 
    }
    
}
