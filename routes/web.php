<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user-home', [UserController::class, 'userHome']);
Route::get('user-about', [UserController::class, 'userAbout']);
Route::view('user-form', 'user-form');
Route::post('addUser', [UserController::class, 'addUser']);
Route::view('user-form2', 'user-form2');
Route::post('addUser2', [UserController::class, 'addUser2']);

Route::view('home2', 'home2');
Route::view('user2', 'home2'); // user2でhome2.blade.phpにアクセスできる
Route::view('about2', 'about2');
Route::get('about2/{name}', function ($name) {
    return view('about2', ['name' => $name]);
});

Route::view('home3/profile/user', 'home3')->name('hm');
Route::view('home3/username/{name}', 'home3')->name('user2');

Route::get('show', [HomeController::class, 'show']);
Route::get('show', [HomeController::class, 'user3']);
