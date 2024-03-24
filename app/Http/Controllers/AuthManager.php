<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login(){
        return view(view: 'login');
    }

    function registration(){
        return view(view: 'registration');
    }
}
