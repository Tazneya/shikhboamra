<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\review;
use App\Models\st_course;
use App\Models\reviews;
use Illuminate\Support\Facades\Validator;
use Auth;

class CourseController extends Controller
{



    public function course_review(Request $request)
    {
        $course_id = $request->id;
       $request->session()->put('recent_course_id', $course_id);
        //$user_id = auth()->user()->id;
        $course_details = course::where('id',$course_id)->first();

       // $enroll_avail = st_course::where('st_id',$user_id)->where('course_id',$course_id)->first();
        //$course_exams = CourseExamController::byCourseId($course_id);
        return view('teacher.course_review',compact('course_details'));
    }

    public function show_all_course()
    {


        $datas = course::where('active_status',1)->where('delete_status',0)->where('teacher_id',auth()->user()->id)->get();
        $i = 1;
        foreach($datas as $data)
        {
            $data['sl_no'] = $i++;
        }
        return view('teacher.instructor_courses',compact('datas'));
    }
    public function course_Update(Request $request){
        $id= $request->id;
        $course_name=$request->course_name;
      //  $course_image=$request->course_image;
        $course_description=$request->course_description;
        $subject=$request->subject;
        $class=$request->class;
        $topic=$request->topic;
    // file_put_contents('test.txt',$request->course_description);
  course::where('id','=',$id)->update(['course_name'=> $course_name,'course_description'=> $course_description,'subject'=> $subject,'class'=> $class,'topic'=> $topic]);
         //file_put_contents('test.txt',($datas));
         $datas = course::get();
         return redirect()->route('show_all_course_teacher')->with('success','Course Updated Successfully');

        // return view('teacher.instructor_courses',compact('datas'));
    }

    public function add_course(Request $req)
    {
        $rules = [
            'course_name'=>'required',
            'course_image'=>'required',
            'course_description'=>'required',
            'subject'=>'required',
            'class'=>'required',
            'topic'=>'required',


        ];
    $customMessages = [
        'course_name.required' => 'Course Name Field is Rquired.',
        'course_image.required'=>'Image filed is required',
        'course_description.required' => 'Description Field is Rquired.',
        'subject.required'=>'Subject filed is required',
        'class.required'=>'Class filed is required',
        'topic.required'=>'Topic filed is required',


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
            'course_image'=>$image,
            'course_type'=>$req->course_type,
            'course_fee'=>$req->course_fee,
            'topic'=>$req->topic

         ]);

       return redirect()->route('show_all_course_teacher')->with('success','Course Added Successfully');


    }

    public function apiCreateRating(Request $req)
    {
        $inputs = $req->all();
        $review = review::where([
            'st_id' => $inputs['st_id'],
            'course_id' => $inputs['course_id']
        ])->first();
        if($review === null) {
            $newReview = review::create([
                'st_id' => $inputs['st_id'],
                'course_id' => $inputs['course_id'],
                'rating' => $inputs['rating'],
                'review' => $inputs['review']
            ]);
            return response()->json($newReview, 201);
        } else {
            $review->rating = $inputs['rating'];
            $review->review = $inputs['review'];

            $review->update();
            return response()->json($review, 201);
        }
    }
    public function apiGetCourseRatings($course_id)
    {
        $reviews = review::where('course_id', $course_id)->get();
        $totalReviews = count($reviews);
        $reviewSummary = [
            'average' => 0,
            'star1' => 0,
            'star2' => 0,
            'star3' => 0,
            'star4' => 0,
            'star5' => 0
        ];

        foreach($reviews as $review) {
            $reviewSummary['average'] = $review->rating;
            $deNormalizedReview = floor($review->rating / 2);
            if($deNormalizedReview === 1) {
                $reviewSummary['star1']++;
            } else if($deNormalizedReview === 2) {
                $reviewSummary['star2']++;
            } else if($deNormalizedReview === 3) {
                $reviewSummary['star3']++;
            } else if($deNormalizedReview === 4) {
                $reviewSummary['star4']++;
            } else if($deNormalizedReview === 5) {
                $reviewSummary['star5']++;
            }
        }

        $reviewSummary['average'] = (floor($reviewSummary['average'] / $totalReviews))/2;
        $reviewSummary['star1'] = ($reviewSummary['star1'] / $totalReviews) * 100;
        $reviewSummary['star2'] = ($reviewSummary['star2'] / $totalReviews) * 100;
        $reviewSummary['star3'] = ($reviewSummary['star3'] / $totalReviews) * 100;
        $reviewSummary['star4'] = ($reviewSummary['star4'] / $totalReviews) * 100;
        $reviewSummary['star5'] = ($reviewSummary['star5'] / $totalReviews) * 100;

        return response()->json($reviewSummary, 200);
    }
    public function apiGetReviews($course_id) {
        $reviews = review::where('course_id', $course_id)->get();
        foreach($reviews as $review)
        {
           $review->st_name = $review->user_info->student->st_name;
        }
    // file_put_contents('test.txt',json_encode($reviews));
        return response()->json($reviews, 200);
    }


}
