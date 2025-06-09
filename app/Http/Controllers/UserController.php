<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  //user search
  public function user_search(Request $request){
      $user_data = User::where('name', 'like', '%' . $request->search_user . '%')->get();
      $title = 'user Search result';
      return view('admin.users',compact('$user_data','title'));
    }
  //user management
  public function users(){
    $user_data = User::select('id','name','email','password','created_at')->get();
    $title='users';
        return view('admin.users',compact('user_data','title'));
    }
}