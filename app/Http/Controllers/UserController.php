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
        $request->validate([
            'username' => 'required | min:3 | max:15',
            'city' => 'required',
            'email' => 'required | email',
            'skill' => 'required'
        ]);
        return $request;
    }

    function addUser2(Request $request)
    {
        // return $request;
        echo $request->skill;
        echo '<br>';
        echo $request->gender;
        echo '<br>';
        echo $request->age;
        echo '<br>';
        echo $request->city;
        echo '<br>';
    }
}
