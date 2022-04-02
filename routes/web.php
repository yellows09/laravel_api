<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("auth")->group(function(){
    Route::get('/logout',[\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/home',function(){
        return view("home");
    })->name('home');
//    Route::get('/posts',[\App\Http\Controllers\PostsController::class,'index'])->name('allPosts');
    Route::get('/posts',function (){
        $cat = \App\Models\Categories::all();
        foreach($cat as $c) {
            echo '<b> Category </b>' . $c['category_name'];
            foreach ($c->posts as $ca){
                echo '<b> title </b>' . $ca['title'];
            }
            echo '<br>';
        }
    });
});

Route::middleware("guest")->group(function(){
    Route::get('/registration',[\App\Http\Controllers\AuthController::class, 'registerForm'])->name('registration');
    Route::post('/registration_process',[\App\Http\Controllers\AuthController::class, 'register'])->name('registration_process');

    Route::get('/login',[\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
    Route::post('/login_process',[\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
});



