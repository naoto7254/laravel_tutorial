<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function userHome()
    {
        $name = "naoto";
        $users = ['naoto', 'makoto', 'hiroshi'];
        return view('home', ['name' => $name, 'users' => $users]);
    }
    function getUser()
    {
        // return 'this is anil';
        return view('user');
    }
    function aboutUser($name)
    {
        // return 'this is about ' . $name;
        return view('about', ['name' => $name]);
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
