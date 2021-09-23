<?php

namespace App\Http\Controllers;

use App\Models\course_exam;
use Dflydev\DotAccessData\Util;
use Illuminate\Http\Request;

class CourseExamController extends Controller
{
    //
    public static function all()
    {
        $course_exams =  course_exam::all();
        foreach($course_exams as $course_exam) {
            $course_exam->durationString = Utils::getDurationString((int)$course_exam->duration);
        }
        return $course_exams;
    }
    public function create(Request $req)
    {
        $req->validate([
            'course_id' => 'required',
            'exam_name' => 'required',
            'total_marks' => 'required'
        ]);
        $duration = $req->input('hour') * 3600 + $req->input('minute') * 60 + $req->input('second');
        course_exam::create([
            'course_id' => $req->input('course_id'),
            'exam_name' => $req->input('exam_name'),
            'duration' => $duration,
            'total_marks' => $req->input('total_marks')
        ]);

        return redirect()->route('course_exams');
    }
}
