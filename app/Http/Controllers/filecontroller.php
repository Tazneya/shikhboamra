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
    public function instructor_courses(){
        return view('instructor_courses');
    }
    public function course_details(){
        return view('course_details');
    }
    public function ci_edit(){
        return view('ci_edit');
    }
    public function video_add(){
        return view('teacher.video_add');
    }
    public function note_add(){
        return view('teacher.note_add');
    }
    public function add_new_exam(){
        return view('add_new_exam');
    }
    public function add_question(){
        return view('add_question');
    }
    public function create_new_course(){
        return view('teacher.create_new_course');
    }
    public function instructor_all_review(){
        return view('instructor_all_review');
    }
    public function instructor_analytics(){
        return view('instructor_analytics');
    }
    public function analytics_table(){
        return view('analytics_table');
    }
    public function student_prograss(){
        return view('student_prograss');
    }
    public function course_progration(){
        return view('course_progration');
    }
    public function exam_performance(){
        return view('exam_performance');
    }
    public function details_que_ans(){
        return view('details_que_ans');
    }
    public function instructorhome(){
        return view('teacher.instructorhome');
    }
    public function course_video(){
        return view('course_video');
    }
    public function course_note(){
        return view('course_note');
    }
    public function course_exam(){
        return view('course_exam');
    }
    public function add_new_qus(){
        return view('add_new_qus');
    }

}

