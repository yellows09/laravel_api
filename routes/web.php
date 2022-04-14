<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Notification;
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

Route::get('/{any}',[\App\Http\Controllers\MainController::class,'index'])->where('any','.*');
//Route::get('/', function () {
//    return view('welcome');
//})->name('start');
//Route::get('/send',[\App\Http\Controllers\mailController::class,'sendMail']);
//
//Route::middleware("auth")->group(function(){
//    Route::get('/logout',[\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
//
//    Route::get('/home',function(){
//        return view("home");
//    })->name('home');
//
//    Route::get('/showCategories',function (){
//        return view('categories');
//    })->name('showCategories');
//
//    Route::get('/showPosts',function (){
//        return view('posts');
//    })->name('showPosts');
////    Route::get('/showPosts',[\App\Http\Controllers\Api\PostController::class,'index'])->name('showPosts');
//
//    Route::post('/createPost',[\App\Http\Controllers\Api\PostController::class,'createPost'])->name('createPost');
//    Route::get('/createPostForm',[\App\Http\Controllers\Api\PostController::class,'createPostForm'])->name('createPostForm');
////    Route::get('/posts',[\App\Http\Controllers\PostsController::class,'index'])->name('allPosts');
////    Notification::route('telegram', '1867965641')
////        ->notify(new \App\Notifications\Telegram);
//
//});
//
//Route::middleware("guest")->group(function(){
//Route::get('/registration',[\App\Http\Controllers\AuthController::class, 'registerForm'])->name('registration');
//Route::post('/registration_process',[\App\Http\Controllers\AuthController::class, 'register'])->name('registration_process');
//
//Route::get('/login',[\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
//Route::post('/login_process',[\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
//});
//

