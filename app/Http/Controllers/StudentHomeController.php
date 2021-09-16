<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentHomeController extends Controller
{
    //
    public function index()
    {
            return view('student.home');
    }
}
