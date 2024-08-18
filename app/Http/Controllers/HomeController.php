<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show()
    {
        // return redirect()->to('home3/profile/user');
        return to_route('hm');
    }

    function user()
    {
        return to_route('user3', ['name' => 'naoto']);
    }
}
