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
        ], [
            'username.required' => 'Username can not be empty',
            'username.min' => 'Username min characters should be 3',
            'username.max' => 'Username max characters limit is 15',
            'city.required' => 'City can not be empty',
            'email.required' => 'Email can not be empty',
            'email.email' => 'This email is not valid',
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
