<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
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
        return view('admin.login');
    }
}
