<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//For Users
Route::get('/user/login',function(){
    if(Auth::user()){
        return redirect()->back();
    }return view('users.login');
})->name('users.login');
Route::post('/user/login',[UserController::class,'login'])->name('login');

Route::get('/user/register',function(){
    if(Auth::user()){
        return redirect()->back();
    }
    return view('users.register');
})->name('users.register');
Route::post('user/register',[UserController::class,'register'])->name('register');

Route::get('user/home',fn()=>view('users.home'))->name('users.home')->middleware('auth');

Route::get('user/logout',[UserController::class,'logout'])->name('user.logout');


//For Admin
Route::middleware(['auth','Admin'])->group(function(){
    Route::get('/dashboard',[AdminController::class,'countmessage'])
    ->name('dashboard');
    Route::get('/users',[UserController::class,'users'])->name('users.home');
    Route::get('/manageusers',[UserController::class,'manageusers'])->name('users.manageusers');
    Route::get('/users/{id}/edituser',[UserController::class,'edituser'])->name('users.edit');
    Route::post('/users/{id}/edituser',[UserController::class,'updateuser']);

    Route::get('/users/{id}/delete',[UserController::class,'destroy']);


    Route::get('/roles',[RoleController::class,'index']);
    Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/roles/create',[RoleController::class,'store']);


    Route::get('/posts/create',[PostController::class,'create'])->name('create');
    Route::post('/posts/create',[PostController::class,'store']);
    Route::get('/posts/edit/{id}',[PostController::class,'edit']);
    Route::post('/posts/edit/{id}',[PostController::class,'update']);
    Route::get('/posts/delete/{id}',[PostController::class,'destroy']);

    Route::get('/message',[MessageController::class,'show'])->name('message.show');
    Route::get('/message/detail/{id}',[MessageController::class,'detail'])->name('message.detail');
    Route::get('/message/delete/{id}',[MessageController::class,'destroy']);

});



//Can See Not a user
Route::get('/',[UserController::class,'index'])->name('welcome');
Route::get('/about',fn()=>view('about'));
Route::get('/contact',fn()=>view('contact'))->name('contact');
Route::post('/contact',[MessageController::class,'message']);

Route::get('/posts',[PostController::class,'index'])->name('posts');

Route::get('/posts/show/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/allposts',[PostController::class,'allposts'])->name('allposts');


Route::post('/comments/add',[CommentController::class,'create']);
Route::get('/comments/delete/{id}',[CommentController::class,'delete']);

Route::get('/users/change_password',[UserController::class,'change_password'])->name('change_password');
Route::post('/users/update_password',[UserController::class,'update_password'])->name('update_password');
