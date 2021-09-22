<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\st_course;

class StudentCourseController extends Controller
{
    //
    public function show_course_details(Request $request)
    {
        $course_id = $request->id;
        $user_id = auth()->user()->id;
        $course_details = course::where('id',$course_id)->first();
        $enroll_avail = st_course::where('st_id',$user_id)->where('course_id',$course_id)->first();
        return view('student.course_details',compact('course_details','enroll_avail'));
    }

    public function course_enroll(Request $request)
    {
        $st_id =auth()->user()->id; ;
        $course_id = $request->course_id;
        st_course::create(['st_id'=>$st_id,'course_id'=>$course_id]);
    }
}
