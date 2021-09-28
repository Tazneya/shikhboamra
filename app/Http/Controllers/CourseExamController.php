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

        $total_correct_answers = 0;
        foreach($inputs['answers'] as $answer) {
            $question = question::find($answer['question_id']);
            $correct = $question->correct_ans === $answer['response'] ? 1 : 0;
            $total_correct_answers = $correct === 1 ? $total_correct_answers + 1 : $total_correct_answers;
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
    public static function makeStudentExamEntry($exam_id, $student_id, $total_answers, $total_correct_answers)
    {
        $exam = course_exam::find($exam_id);
        $obtaining_marks = ($exam->total_marks / $total_answers) * $total_correct_answers;

        $st_exam = st_exam::create([
            'st_id' => $student_id,
            'exam_id' => $exam_id,
            'obtaining_marks' => $obtaining_marks
        ]);

        return $st_exam;
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
