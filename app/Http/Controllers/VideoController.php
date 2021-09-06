<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course_content;

class VideoController extends Controller
{
    //
    public function show_all_video_teacher(Request $req)
    {
        $course_id = $req->id;
        $datas = course_content::where('course_id',$course_id)->where('content_type','video')->get();
        return view('course_video',compact('datas','course_id'));
    }
    public function video_add_ui()
    {
        return view('video_add');
    }
}
