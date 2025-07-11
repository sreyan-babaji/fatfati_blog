<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogSiteController extends Controller
{
     // search
    public function search(Request $request){
    $post_data = Post::where('post_title', 'like', '%' . $request->search . '%')
                     ->paginate(9); 
    foreach($post_data as $post){
        $post->short_content = Str::limit($post->post_content, 120,'');
    }
    $title = 'Search result';
    return view('site.site_article', compact('post_data', 'title'));
    }

    //home page
    public function blog_home(){
        $category_data=Category::select('id','category_name')->get();
         foreach ($category_data as $category) {
            $category->post_count = Post::where('post_category', $category->id)->count();
        }
        $post_data=Post::Paginate(4);
        foreach($post_data as $post){
            $post->short_content = Str::limit($post->post_content, 180,'');
            $post->category_data=Category::where('id',$post->post_category)->first();
            $post->category_name=$post->category_data->category_name;
        }
        $title="home page";
        return view('site.blog_home',compact('post_data','title','category_data')); 
    }

    //article
    public function site_article(){
        $post_data=Post::Paginate(9);
         foreach($post_data as $post){
            $post->short_content = Str::limit($post->post_content, 120,'');
        }
        return view('site.site_article',compact('post_data'),['title' => 'article']); 
    }

    //single post show
     public function post_show($post_id){
        $post_data = Post::find($post_id);
        $title="see post";
       return view('site.post_show',compact('post_data','title')); 
    }

    //category
    public function site_category(){
        $category_data=Category::Paginate(4);
         foreach ($category_data as $category) {
            $category->post_count = Post::where('post_category', $category->id)->count();
        }
        //$postCount = Post::where('post_category','3')->count();
       return view('site.site_category',compact('category_data'),['title' => 'category']); 
    }

    //about
    public function site_about(){
       return view('site.site_about',['title' => 'about']); 
    }

    //contact
     public function site_contact(){
       return view('site.site_contact',['title' => 'contact']); 
    }
    
}
