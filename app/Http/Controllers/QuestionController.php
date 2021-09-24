<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public static function getByExamId($exam_id) 
    {
        $questions = question::where('exam_id', $exam_id)->get();
        return $questions;
    }
    public function create(Request $req)
    {
        $req->validate([
            'exam_id' => 'required',
            'question' => 'required',
            'correct_ans' => 'required'
        ]);
        question::create([
            'exam_id' => $req->input('exam_id'),
            'question' => $req->input('question'),
            'option1' => $req->input('option1'),
            'option2' => $req->input('option2'),
            'option3' => $req->input('option3'),
            'option4' => $req->input('option4'),
            'correct_ans' => $req->input('correct_ans'),
            'tag' => $req->input('tag')
        ]);

        $req->session()->flash('msg', 'Question Created');
        return back();
    }
}
