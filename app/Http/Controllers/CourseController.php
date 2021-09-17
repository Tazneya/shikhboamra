<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use Illuminate\Support\Facades\Validator;
use Auth;

class CourseController extends Controller
{




    public function show_all_course()
    {


        $datas = course::where('active_status',1)->where('delete_status',0)->get();
        $i = 1;
        foreach($datas as $data)
        {
            $data['sl_no'] = $i++;
        }
        return view('teacher.instructor_courses',compact('datas'));
    }

    public function add_course(Request $req)
    {
        $rules = [
            'course_name'=>'required',
            'course_image'=>'required',
            'course_description'=>'required',
            'subject'=>'required',
            'class'=>'required',




        ];
    $customMessages = [
        'course_name.required' => 'Course Name Field is Rquired.',
        'course_image.required'=>'Image filed is required',
        'course_description.required' => 'Description Field is Rquired.',
        'subject.required'=>'Subject filed is required',
        'class.required'=>'Class filed is required',


    ];

    $validator = Validator::make( $req->all(), $rules, $customMessages );


    if($validator->fails())
    {
        return redirect()->back()->withInput()->with('errors',collect($validator->errors()->all()));
    }


        //image code start
        $image = time() . '.' . request()->course_image->getClientOriginalExtension();//course_image from view file

        $req->course_image->move(public_path('../image/course_image') , $image);
         $image = "image/course_image/" . $image;


         //Image code end

         course::create([
            'teacher_id'=>auth()->user()->id,
            'course_name'=>$req->course_name,
            'course_description'=>$req->course_description,
            'subject'=>$req->subject,
            'class'=>$req->class,
            'course_image'=>$image

         ]);

       return redirect()->route('show_all_course_teacher')->with('success','Course Added Successfully');


    }




}
