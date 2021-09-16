<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class StudentHomeController extends Controller
{
    //
    public function index()
    {
        $courses = course::get();
            return view('student.home',compact('courses'));
    }


}
