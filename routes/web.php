<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::view('/home', 'home'); // 上の行とほぼ同じ事をしているが若干違う事をしている
// Route::redirect('/home', '/');

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about', ['name' => $name]);
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('about/{name}', [UserController::class, 'aboutUser']);

Route::get('admin-login', [UserController::class, 'adminLogin']);
