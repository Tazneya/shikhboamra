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
        return view('teacher.course_details');
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
    public function add_new_exam(Request $req){
        $course_id = $req->query('course_id');
        return view('teacher.add_new_exam', ['course_id' => $course_id]);
    }
    public function add_question(Request $req){
        $exam_id = $req->query('exam_id');
        $questions = QuestionController::getByExamId($exam_id);
        return view('teacher.add_question', 
            ['exam_id' => $exam_id],
            ['questions' => $questions]
        );
    }
    public function create_new_course(){
        return view('teacher.create_new_course');
    }
    public function instructor_all_review(){
        return view('teacher.instructor_all_review');
    }
    public function instructor_analytics(){
        return view('teacher.instructor_analytics');
    }
    public function analytics_table(){
        return view('teacher.analytics_table');
    }
    public function student_prograss(){
        return view('teacher.student_prograss');
    }
    public function course_progration(){
        return view('teacher.course_progration');
    }
    public function exam_performance(){
        return view('teacher.exam_performance');
    }
    public function details_que_ans(){
        return view('teacher.details_que_ans');
    }
    public function instructorhome(){
        return view('teacher.instructorhome');
    }
    public function course_video(){
        return view('teacher.course_video');
    }
    public function course_note(){
        return view('teacher.course_note');
    }
    public function course_exam(Request $req){
        $course_exams = CourseExamController::all();
        $course_id = $req->query('course_id');
        return view('teacher.course_exam', 
        [
            'course_id' => $course_id,
            'course_exams' => $course_exams
        ]);
    }
    public function add_new_qus(Request $req){
        $exam_id = $req->query('exam_id');
        return view('teacher.add_new_qus', ['exam_id' => $exam_id]);
    }

}

