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

    function addUser(Request $request)
    {
        echo 'User name is :' . $request->username;
        echo '<br>';
        echo $request->city;
        echo '<br>';
        echo $request->email;
        echo '<br>';

        // これでも呼び出せる
        echo 'これでも呼び出せる' . $request->input('city');
    }
}
