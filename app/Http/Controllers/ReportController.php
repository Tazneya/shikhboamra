<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\user;
use App\Models\question;
use App\Models\st_answer;
class ReportController extends Controller
{
    //
    public function course_report()
    {
        $datas = course::where('active_status',1)->where('delete_status',0)->get();
        $i = 1;
        foreach($datas as $data)
        {
            $data['sl_no'] = $i++;
        }
        return view('teacher.course_report',compact('datas'));
    }
    public function student_details($course_id)
    {
        $datas = course::find($course_id)->enroll_count;
        $i = 1;
        foreach($datas as $data)
        {
            $data['sl_no'] = $i++;
        }
        return view('teacher.student_info',compact('datas'));


    }
    public function exam_details($course_id,$student_id)
    {
        //file_put_contents('test.txt',$course_id." ".$student_id);
        $datas = user::find($student_id)->exam($course_id)->get();

        //file_put_contents('test.txt',json_encode($datas));

        $i = 1;
        foreach($datas as $data)
        {
            $data['sl_no'] = $i++;
        }
        return view('teacher.student_exam_result',compact('datas'));
    }
    public function answer_sheet($exam_id,$student_id)
    {
        $datas = question::where('exam_id',$exam_id)->get();
       file_put_contents('test.txt',$exam_id." ".$student_id);
        $i = 1;
        foreach($datas as $data)
        {
            $verdict = st_answer::where('question_id',$data->id)->where('user_id',$student_id)->first()->correct;


            if($verdict == 1)
            $data['verdict'] = 'Correct';
            else
            $data['verdict'] = 'Wrong';

            $data['sl_no'] = $i++;
        }
        return view('teacher.student_exam_question',compact('datas','student_id'));

    }
}