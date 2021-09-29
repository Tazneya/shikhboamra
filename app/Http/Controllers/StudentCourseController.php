<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\course_exam;
use App\Models\question;
use App\Models\st_answer;
use App\Models\st_course;
use App\Models\st_exam;

class StudentCourseController extends Controller
{
    //
    public function show_course_details(Request $request)
    {
        $course_id = $request->id;
        $user_id = auth()->user()->id;
        $course_details = course::where('id',$course_id)->first();
        $enroll_avail = st_course::where('st_id',$user_id)->where('course_id',$course_id)->first();
        $course_exams = CourseExamController::byCourseId($course_id);
        return view('student.course_details_enrolled',compact('course_details','enroll_avail', 'course_exams'));
    }

    public function show_course_details_enrolled(Request $request)
    {
        $course_id = $request->id;
        $user_id = auth()->user()->id;
        $course_details = course::where('id',$course_id)->first();
        $course_exams = CourseExamController::byCourseId($course_id);
        $enroll_avail = st_course::where('st_id',$user_id)->where('course_id',$course_id)->first();
        return view('student.course_details_enrolled',compact('course_details','enroll_avail', 'course_exams'));
    }

    public function course_enroll(Request $request)
    {
        $st_id =auth()->user()->id; ;
        $course_id = $request->course_id;
        st_course::create(['st_id'=>$st_id,'course_id'=>$course_id]);
    }
    public function exam_page($exam_id)
    {
        return view('student.exam_page', ['exam_id' => $exam_id]);
    }
    public function exam_page_old($exam_id)
    {
        $questions = question::where('exam_id', $exam_id)->paginate(1);
        
        /* 
        As laravel paginator gives seperated pagination information to json object
        So the paginated result first converted into json then again reverted to obtain
        all the pagination informations for custom pagination
        */
        $question_json = json_encode($questions);        
        $question_json = json_decode($question_json, true);

        $next_page_url = $question_json['next_page_url'];
        $prev_page_url = $question_json['prev_page_url'];
        $current_page = $question_json['current_page'];
        $total_page = $question_json['total'];

        $question = $questions[0];

        return view('student.exam_page', [
            'question' => $question,
            'next_page_url' => $next_page_url,
            'current_page' => $current_page,
            'prev_page_url' => $prev_page_url,
            'total_page' => $total_page
        ]);
    }
    public function exam_confirmation($exam_id)
    {   
        $exam = CourseExamController::find($exam_id);
        return view('student.exam_confirmation', ['exam' => $exam]);
    }
    public function exam_result($exam_id)
    {
        $correct_answer_count = 0;
        $answers = st_answer::where([
            'exam_id' => $exam_id,
            'user_id' => session('user')->id
        ])->get();
        foreach($answers as $answer) {
            if($answer->correct) {
                $correct_answer_count++;
            }
            $answer->question = question::find($answer->question_id);
        }
        $st_exam = st_exam::where([
            'exam_id' => $exam_id,
            'st_id' => session('user')->id
        ])->first();

        return view('student.exam_result', [
            'answers' => $answers,
            'st_exam' => $st_exam,
            'correct_answer_count' => $correct_answer_count
        ]);
    }
}
