<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class AdminController extends Controller
{
    //
    public function show_teacher_list()
    {
        $teachers = user::where('role','Teacher')->get();
        return view('admin.teacher_list',compact('teachers'));
    }

    public function show_student_list()
    {
        $students = user::where('role','Student')->get();
        return view('admin.student_list',compact('students'));
    }
}
