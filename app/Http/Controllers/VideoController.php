<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course_content;
use Illuminate\Support\Facades\Validator;
use Youtube;

class VideoController extends Controller
{
    //
    public function show_all_video_teacher(Request $req)
    {
        $course_id = $req->id;
        $datas = course_content::where('course_id',$course_id)->where('content_type','video')->get();
        return view('teacher.course_video',compact('datas','course_id'));
    }
    public function video_add_ui(Request $req)
    {
        $course_id = $req->id;
        return view('teacher.video_add',compact('course_id'));
    }

    public function add_content_video(Request $req)
    {
        $rules = [
            'content_name'=>'required',

            'content_video'=>'required',
            'content_duration'=>'required',




        ];
    $customMessages = [
        'content_name.required' => 'Content Name Field is Rquired.',
        'content_video.required'=>'Content Video Filed is required',

        'content_duration.required'=>'Content Duration filed is required',


    ];

    $validator = Validator::make( $req->all(), $rules, $customMessages );


    if($validator->fails())
    {
        return redirect()->back()->withInput()->with('errors',collect($validator->errors()->all()));
    }


         $video = time() . '.' . request()->content_video->getClientOriginalExtension();//course_image from view file
        //  $videos = Youtube::upload($req->file('content_video')->getPathName(), [
        //     'title'       => 'My Awesome Video',
        //     'description' => 'You can also specify your video description here.',
        //     'tags'	      => ['foo', 'bar', 'baz'],

        // ]);

       // return $videos->getVideoId();




        $req->content_video->move(public_path('../video/content_video') , $video);
          $content_video = "video/content_video/" . $video;

          course_content::create([
            'course_id'=>$req->course_id,
            'content_type'=>'video',
            'content_name'=>$req->content_name,
            'content_url' =>$content_video,
            'duration'=>$req->content_duration

          ]);

         return redirect()->route('course_video',['id'=>$req->course_id])->with('success','Video Added Successfully');


    }
}
