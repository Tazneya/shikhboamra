<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course_content;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    //
    public function show_all_note_teacher(Request $req)
    {
        $course_id = $req->id;
        $i=1;

        $datas = course_content::where('course_id',$course_id)->where('content_type','note')->get();
        foreach($datas as $data)
        {
            $data['sl_no'] = $i++;
        }
        return view('course_note',compact('datas','course_id'));
    }

    public function note_add_ui(Request $req)
    {
        $course_id = $req->id;
        return view('note_add',compact('course_id'));
    }

    public function add_content_note(Request $req)
    {
        $rules = [
            'content_name'=>'required',

            'content_note'=>'required',





        ];
    $customMessages = [
        'content_name.required' => 'Content Name Field is Rquired.',
        'content_note.required'=>'Content Video Filed is required',




    ];

    $validator = Validator::make( $req->all(), $rules, $customMessages );


    if($validator->fails())
    {
        return redirect()->back()->withInput()->with('errors',collect($validator->errors()->all()));
    }


         $note = time() . '.' . request()->content_note->getClientOriginalExtension();//course_image from view file

         $req->content_note->move(public_path('../note/content_note') , $note);
          $content_note = "note/content_note/" . $note;

          course_content::create([
            'course_id'=>$req->course_id,
            'content_type'=>'note',
            'content_name'=>$req->content_name,
            'content_url' =>$content_note,


          ]);

          return redirect()->route('course_note',['id'=>$req->course_id])->with('success','Video Added Successfully');


    }

}
