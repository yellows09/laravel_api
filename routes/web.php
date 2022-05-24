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
Route::get('/testService', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/send', [\App\Http\Controllers\mailController::class, 'sendMail']);

Route::get('/forgotPassword', [\App\Http\Controllers\Api\UserController::class, 'forgotPassword'])->name('forgotPassword');

Route::post('/forgotPasswordProcess', [\App\Http\Controllers\Api\UserController::class, 'forgotPasswordProcess'])->name('forgotPasswordProcess');

Route::middleware("CheckBrowser")->group(function () {
    Route::middleware("auth")->group(function () {
        Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

        Route::get('/home', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('home');

        Route::get('/showCategories', [\App\Http\Controllers\Api\PostController::class, 'categories'])->name('showCategories');

        Route::get('/showPosts', [\App\Http\Controllers\Api\PostController::class, 'posts'])->name('showPosts');

        Route::post('/deletePost', [\App\Http\Controllers\Api\PostController::class, 'deletePost'])->name('deletePost');

        Route::get('/showPost/{id}', [\App\Http\Controllers\Api\PostController::class, 'show']);

        Route::post('/createPost', [\App\Http\Controllers\Api\PostController::class, 'createPost'])->name('createPost');
        Route::get('/createPostForm', [\App\Http\Controllers\Api\PostController::class, 'createPostForm'])->name('createPostForm');
    });
});

Route::middleware("guest")->group(function () {
    Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'registerForm'])->name('registration');
    Route::post('/registration_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('registration_process');

    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
});


