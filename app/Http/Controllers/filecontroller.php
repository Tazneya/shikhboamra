<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filecontroller extends Controller
{
    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }
}
