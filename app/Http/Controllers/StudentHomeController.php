<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class StudentHomeController extends Controller
{
    //
    public function index()
    {
        $subjects = course::get(['subject']);
        $topics = course::get(['topic']);
        $courses = course::get();

        return view('student.home',compact('courses','subjects','topics'));
    }

    public function filter_course(Request $request)
    {
        $subject = $request->subject;
        $topic = $request->topic;
        $courses = course::where('subject',$subject)->where('topic',$topic)->get();
        $subjects = course::get(['subject']);
        $topics = course::get(['topic']);
        return view('student.home',compact('courses','subjects','topics'));

        //file_put_contents('test.txt',$subject." ".$topic);
    }




}
