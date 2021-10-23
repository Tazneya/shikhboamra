<?php

namespace App\Http\Controllers;

use App\Models\forum_question;
use App\Models\forum_question_reply;
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
        return forum_question::all();
    }
    public function getQuestions($course_id) {
        return forum_question::where('course_id', $course_id)->with('user')->orderBy('id', 'DESC')->get();
    }
    public function getAllReplys($question_id)
    {
        return forum_question_reply::where('question_id', $question_id)->with('user')->orderBy('id', 'DESC')->get();
    }
}