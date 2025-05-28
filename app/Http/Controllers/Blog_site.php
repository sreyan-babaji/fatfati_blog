<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog_site extends Controller
{
    public function blog_home(){
        return view('site.blog_home',['title' => 'home']);
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
