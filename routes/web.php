<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user-home', [UserController::class, 'userHome']);
Route::get('user-about', [UserController::class, 'userAbout']);
Route::view('user-form', 'user-form');
Route::post('addUser', [UserController::class, 'addUser']);
Route::view('user-form2', 'user-form2');
Route::post('addUser2', [UserController::class, 'addUser2']);
