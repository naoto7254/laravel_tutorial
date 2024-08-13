<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function userHome()
    {
        return view('home');
    }

    function userAbout()
    {
        return view('about');
    }

    function adminLogin()
    {
        if (View::exists('admin.login')) {
            return view('admin.login');
        } else {
            return 'View not found';
        }
    }
}
