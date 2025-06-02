<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //post search
     public function post_search(Request $request){
        $categories=Category::select('id','category_name')->get();
        $post_data = Post::where('post_title', 'like', '%' . $request->search_text . '%')->get();
        $title = 'Post Search result';
        return view('admin.post_management',compact('post_data','title','categories'));
    }
     //category search
     public function category_search($category_id){
        $categories=Category::select('id','category_name')->get();
        $post_data = Post::where('post_category', $category_id)->get();
        $title = 'category Search result';
        return view('admin.post_management',compact('post_data','title','categories'));
    }
    //Post manage view
    public function post_management(){
        $categories=Category::select('id','category_name')->get();
        $post_data=Post::select('id','post_category','post_title','post_img','post_content','author','slug','created_at','updated_at')->get();
        $title='Post Management';
        return view('admin.post_management',compact('post_data','title','categories'));
    }

     //Post create view
    public function post_create_view(){
        $all_category=Category::select('id','category_name')->get();
        $title='admin create post';
        return view('admin.create_post',compact('all_category','title'));
    }

    //Post create input/store
    public function post_create_input(Request $request){

    $request->validate([
            'post_title'    => 'required|string|max:255',
            'post_category' => 'required|string|max:100',
            'slug'          => 'required|string|max:255|unique:posts,slug',
            'post_content'  => 'required|string',
        ], [ 
            //custom error massages
            'post_title.required'    => '! পোষ্টের টাইটেল দিন',
            'post_title.string'      => 'Post title string hote hobe.',
            'post_title.max'         => 'Post title 255 characters er beshi hote parbe na.',

            'post_category.required' => 'Post category dite hobe.',
            'post_category.string'   => 'Post category string hote hobe.',
            'post_category.max'      => 'Post category 100 characters er beshi hote parbe na.',

            'slug.required'          => 'Slug dite hobe.',
            'slug.string'            => 'Slug string hote hobe.',
            'slug.max'               => 'Slug 255 characters er beshi hote parbe na.',
            'slug.unique'            => 'Ei slug already use kora hoyeche.',

            'post_content.required'  => 'Post content dite hobe.',
            'post_content.string'    => 'Post content string hote hobe.',
        ]);
        // Step 2: Store the post
        $post_input = new Post();
        $post_input->post_title    = $request->post_title;
        $post_input->post_category = $request->post_category;
        $post_input->slug          = $request->slug;
        $post_input->post_content  = $request->post_content;
        $post_input->author        = "boss";

        if ($post_input->save()) {
            return redirect()->back()->with('success', 'Post created successfully');
        } 
        else {
            return redirect()->back()->with('failed', 'Post creation failed');
        }
    }
      //post view
    public function blog_post_view(){
        $post_data=Post::select('id','post_category','post_title','post_img','post_content','author','slug','created_at','updated_at')->get();
        return view('admin.blog_post_view',compact('post_data'),['title' => 'view_post']);
    }
    //post edit
    public function post_edit_view(){
        return view('admin.post_edit',['title' => 'edit_post']);
    }
  
}