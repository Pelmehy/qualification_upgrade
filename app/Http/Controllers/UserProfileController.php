<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function user_profile()
    {
        return view('user_profile');
    }

    public function add_users()
    {
        return view('add_users');
    }

}
