<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
      //registration
    public function registration(){
        return view('auth.registration'); 
    }

    public function user_create(Request $request)
{
    // Step 1: validate the registration field
    $validator = Validator::make($request->all(), [
        'name'    => 'required|string|max:100|min:4',
        'email' => 'required|email|max:100|unique:users,email',
        'phone'  => 'required|digits:11|unique:users,phone',
        'password' => 'required|min:8|max:20|confirmed'
    ], [
        'name.required'    => '! নাম দিন',
        'name.string'      => '! নাম অক্ষরের হতে হবে',
        'name.max'         => '! নাম ১০০ অক্ষরের বেশি হতে পারবে না',
        'name.min'         => '! নাম 4 অক্ষরের কম হতে পারবে না',

        'email.required' => '! ইমেইল দিন',
        'email.email'   => '! সঠিক ইমেইল দিন',
        'email.max'      => '! ইমেইল ১০০ অক্ষরের বেশি হতে পারবে না',
        'email.unique'  => '! ইমেইলটি ইতোমধ্যে ব্যবহার হয়েছে',

        'phone.required'  => '! ফোন নং দিন',
        'phone.digits'    => '! ১১ ডিজিটের হতে হবে',
        'phone.unique'    => '! ফোন নম্বরটি ইতোমধ্যে ব্যবহার হয়েছে',

        'password.required' => '! পাসওয়ার্ড দিন',
        'password.min'   => '! ৮ অক্ষরের বেশি হতে হবে',
        'password.max'   => '! ২০ অক্ষরের বেশি হতে পারবে না',
        'password.confirmed' => '! পাসওয়ার্ড মিল নয়',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $user_create = new User();
    $user_create->name = $request->name;
    $user_create->user_role = 'user';
    $user_create->email = $request->email;
    $user_create->phone = $request->phone;
    $user_create->password = Hash::make($request->password);
    
    if ($user_create->save()) {
        return redirect()->route('registration')->with('success', 'User created successfully');
    }
    
    return redirect()->back()->with('error', 'Registration failed');
}


       //login
    public function login(){
        return view('auth.login'); 
    }
}
