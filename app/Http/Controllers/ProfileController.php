<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $title="profile";
        return view('admin.profile',compact('title'));
    }
    public function profile_update(){
        $title="profile update";
        return view('admin.profile_update',compact('title'));
    }
}
