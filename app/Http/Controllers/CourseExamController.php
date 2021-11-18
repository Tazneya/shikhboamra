<?php

namespace App\Http\Controllers;

use App\Models\course_exam;
use App\Models\question;
use App\Models\st_answer;
use App\Models\st_exam;
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
    public static function byCourseId($id)
    {
        
        $course_exams =  course_exam::where('course_id', $id)->get();
        foreach($course_exams as $course_exam) {
            $course_exam->durationString = Utils::getDurationString((int)$course_exam->duration);
            if(session()->has('user')) {
                $st_exam = st_exam::where('exam_id', $course_exam->id)->where('st_id',auth()->user()->id)->first();
                $course_exam->isTaken = $st_exam !== null ? true : false;
            }
        }
        return $course_exams;
    }
    public static function find($id)
    {
        $course_exam =  course_exam::find($id);
        $course_exam->durationString = Utils::getDurationString((int)$course_exam->duration);
        return $course_exam;
    }
    public function apiSubmitAnswers(Request $req)
    {

        $inputs = $req->all();
        //file_put_contents('test2.txt',json_encode($inputs));
        $total_correct_answers = 0;
        foreach($inputs['answers'] as $answer) {
            $question = question::find($answer['question_id']);
            if($answer['response'] !== null) {
                $correct = $question->correct_ans === $answer['response'] ? 1 : 0;
            } else {
                $correct = 0;
            }
            $total_correct_answers = $correct === 1 ? $total_correct_answers + 1 : $total_correct_answers;
            CourseExamController::deleteIfAnswerExists($inputs['exam_id'], $answer['question_id'], $inputs['user_id']);
            st_answer::create([
                'exam_id' => $inputs['exam_id'],
                'question_id' => $answer['question_id'],
                'user_id' => $inputs['user_id'],
                'response' => $answer['response'],
                'correct' => $correct
            ]);
        }
        $exam_entry = $this->makeStudentExamEntry($inputs['exam_id'], $inputs['user_id'], count($inputs['answers']), $total_correct_answers);

        return response()->json(
            [
                'answers' => $inputs,
                'exam_entry' => $exam_entry
            ]);
    }
    public static function deleteIfAnswerExists($exam_id, $question_id, $student_id) {
        $existing_st_answer = st_answer::where([
            'exam_id' => $exam_id,
            'question_id' => $question_id,
            'user_id' => $student_id
        ])->first();

        if($existing_st_answer !== null) {
            $existing_st_answer->delete();
            return true;
        }
        return false;
    }
    public static function makeStudentExamEntry($exam_id, $student_id, $total_answers, $total_correct_answers)
    {

        CourseExamController::deleteIfExamEntryExists($student_id, $exam_id);
        $exam = course_exam::where('id',$exam_id)->first();
        $course_id = $exam->course_id;
        //file_put_contents('test.txt',$course_id);
        $obtaining_marks = ($exam->total_marks / $total_answers) * $total_correct_answers;
        $st_exam = new st_exam();
        $st_exam->st_id = $student_id;
        $st_exam->course_id = $course_id;
        $st_exam->exam_id = $exam_id;
        $st_exam->obtaining_marks = $obtaining_marks;
        $st_exam->save();


        return $st_exam;
    }
    public static function deleteIfExamEntryExists($student_id, $exam_id)
    {
        $st_exam = st_exam::where([
            'st_id' => $student_id,
            'exam_id' => $exam_id
        ])->first();

        if($st_exam !== null) {
            $st_exam->delete();
            return true;
        }
        return false;
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

        return redirect()->to('teacher/course_exam?course_id='.$req->input('course_id'));
    }
}
