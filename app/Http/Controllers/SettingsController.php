<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function settings(){
        
        $settings_data=Setting::first();
        return view('admin.settings',compact('settings_data'),['title' => 'settings']);
    }
    public function updateTitle(){
        $site_title=Setting::select('id','site_title')->first();
        return view('admin.settings',compact('site_title'),['title' => 'settings']);
    }
}