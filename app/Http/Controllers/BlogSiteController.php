<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogSiteController extends Controller
{
    public function blog_home(){
        $categories=Category::select('id','category_name')->get();
        $post_data=Post::select('id','post_category','post_title','post_img','post_status','post_content','author','slug','created_at','updated_at')->get();
        $title="home page";
        return view('site.blog_home',compact('post_data','title'));
        
    }
    public function site_article(){
        return view('site.site_article',['title' => 'article']); 
    }
    public function site_category(){
       return view('site.site_category',['title' => 'category']); 
    }
    public function site_about(){
       return view('site.site_about',['title' => 'about']); 
    }
     public function site_contact(){
       return view('site.site_contact',['title' => 'contact']); 
    }
    
}
