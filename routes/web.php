<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Blog_site;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SettingsController;

/*-------website view all route-----------*/
Route::get('/',[Blog_site::class,'blog_home'])->name('home');
Route::get('article',[Blog_site::class,'site_article'])->name('site_article');
Route::get('category',[Blog_site::class,'site_category'])->name('site_category');
Route::get('about',[Blog_site::class,'site_about'])->name('site_about');
Route::get('contact',[Blog_site::class,'site_contact'])->name('site_contact');


/*-------admin pannel all route-----------*/
//Category
route::get('category-manage',[CategoryController::class,'category_manage'])->name('category_manage');
route::get('category-create-view',[CategoryController::class,'category_create_view'])->name('category_create_view');
route::post('category-create-input',[CategoryController::class,'category_create_input'])->name('category_create_input');
//Post management
route::get('status-search/{status}',[PostController::class,'status_search'])->name('status_search');
route::get('category-search/{category_id}',[PostController::class,'category_search'])->name('category_search');
route::post('post-search',[PostController::class,'post_search'])->name('post_search');
route::get('post-management',[PostController::class,'post_management'])->name('post_management');
route::get('post-create-view',[PostController::class,'post_create_view'])->name('post_create_view');
route::post('post-create-input',[PostController::class,'post_create_input'])->name('post_create_input');
// Posts view
route::get('post-view/{post_id}',[PostController::class,'blog_post_view'])->name('blog_post_view');
// Posts edit
Route::get('post-edit-view/{post_id}', [PostController::class, 'post_edit_view'])->name('post_edit_view');
Route::put('post-update', [PostController::class, 'update'])->name('post_update');
// Posts delete------------------------
//dashboard
route::get('dashboard',[DashboardController::class,'admin_dashboard'])->name('dashboard');
//user
route::get('users',[UserController::class,'users'])->name('users');
//comments
route::get('comments',[CommentController::class,'comment'])->name('comments');
//settings
route::get('settings',[SettingsController::class,'settings'])->name('settings');


