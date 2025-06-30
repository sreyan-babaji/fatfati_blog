<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;

class ProfileController extends Controller
{
    public function profile(){
        $profile_data=User::find(1);
        $user_role_data = UserRole::where('id', $profile_data->user_role )->first();
        $title="profile";
        return view('admin.profile',compact('profile_data','user_role_data','title'));
    }
    public function profile_picture_update(){
        $profile_data=User::find(1);
        $profile_data->profile_pic_url = $request->profile_picture;
         if ($profile_data->update()) {
            return redirect()->back()->with('success', 'picture update successfully');
        } 
    }
    public function profile_data_update(){
        $profile_data=User::find(1);
        $profile_data->name = $request->name;
        $profile_data->email  = $request->email;
         if ($profile_data->update()) {
            return redirect()->back()->with('success', 'profile data successfully');
        } 
    }
    public function password_update(){
        $profile_data=User::find(1);
        if($profile_data->password != $request->current_password){
             return redirect()->back()->with('failed', 'sothik password din');
        }
        else{
            if($request->new_password == $request->confirm_password){
                $profile_data->password = $request->confirm_password;
                $profile_data->update();
                return redirect()->back()->with('success', 'profile data successfully');
            } 
            else{
                echo 'password dont match';
            }
        }   
    }
}
