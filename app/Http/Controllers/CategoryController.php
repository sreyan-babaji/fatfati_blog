<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //category manage view
    public function category_manage(){
        $all_category=Category::select('id','category_name','category_description','category_slug','category_img','updated_at','created_at')->get();
        $category_count=Category::count();
        return view('admin.category',compact('all_category','category_count'),['title' => 'category_manage']);
    }

     //category create view
    public function category_create_view(){
        return view('admin.category_create',['title' => 'category_create']);
    }

     //category create input/store
    public function category_create_input(Request $request){
       $category_input = new Category();
       $category_input->category_name = $request->category_name;
       $category_input->category_description = $request->category_description;
       $category_input->category_slug = $request->category_slug;
        
        if($category_input->save()){
           return redirect()->back()->with('success', 'ক্যাটাগরি সফলভাবে তৈরি করা হয়েছে!');
        }
        else{return 'data not entry';}
    }
}