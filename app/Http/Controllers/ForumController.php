<?php

namespace App\Http\Controllers;

use App\Models\forum_question;
use App\Models\forum_question_reply;
use App\Models\course;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //
    public function apiCreateQuestion(Request $req)
    {
        $inputs = $req->all();
        $question = forum_question::create([
            'text' => $inputs['question'],
            'user_id' => $inputs['user_id'],
            'course_id' => $inputs['course_id']
        ]);
        return response()->json($question, 201);
    }
    public function apiCreateQuestionReply(Request $req)
    {
        $inputs = $req->all();
        $question = forum_question_reply::create([
            'text' => $inputs['reply'],
            'user_id' => $inputs['user_id'],
            'question_id' => $inputs['question_id']
        ]);
        return response()->json($question, 201);
    }
    public function getAllQuestions()
    {
        $questions = forum_question::all();
        foreach($questions as $question)
        {
           $question->st_name = $questions->user->student->st_name;
        }
        //file_put_contents('test2.txt',json_encode($questions));
        return $questions ;

    }
    public function teacherForum(Request $request)
    {
        $course_id = $request->id;
       // $request->session()->put('recent_course_id', $course_id);
         //$user_id = auth()->user()->id;
         $course_details = course::where('id',$course_id)->first();

        // $enroll_avail = st_course::where('st_id',$user_id)->where('course_id',$course_id)->first();
         //$course_exams = CourseExamController::byCourseId($course_id);
         return view('teacher.course_forum',compact('course_details'));

    }
    public function getQuestions($course_id) {
        //file_put_contents('test2.txt','hello');
        $questions = forum_question::where('course_id', $course_id)->with('user')->orderBy('id', 'DESC')->get();
        foreach($questions as $question)
        {
           $question->st_name = $question->user->student->st_name;
        }
        //file_put_contents('test2.txt',json_encode($questions));
        return $questions;
    }
    public function getAllReplys($question_id)
    {
        $replys = forum_question_reply::where('question_id', $question_id)->with('user')->orderBy('id', 'DESC')->get();
        foreach($replys as $question)
        {
           $question->st_name = $question->user->teacher->teacher_name;
        }
        return $replys;
    }
}
