<?php

namespace App\Http\Controllers;

use App\Models\student_info;
use App\Models\teacher_info;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\user;
use App\Models\user_otp;
use Hash;
use Illuminate\Support\Facades\Hash as BcryptHash;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    //



    public function signup(Request $request)
    {
        //file_put_contents('test.txt',$request->role);
        $user_id = 0;
        if($request->role == 'Teacher'){
        $rules = [
            'first_name'=>'required',
            'last_name'=>'required',
            'teacher_qualification'=>'required',
            'mobile_number'=>['required','regex:/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/'],
            'password'=>'required|confirmed',





        ];
    $customMessages = [
        'first_name.required' => 'First Name Field is Rquired.',
        'last_name.required'=>'Last Name filed is required',
        'teacher_qualification.required' => 'Teacher Qualification Field is Rquired.',
        'mobile_number.required'=>'Mobile number filed is required',
        'password.required'=>'Password filed is required',


    ];

    $validator = Validator::make( $request->all(), $rules, $customMessages );


    if($validator->fails())
    {
        return redirect()->back()->withInput()->with('errors',collect($validator->errors()->all()));
    }

    $user = user::create([
        'mobile_number'=>$request->mobile_number,
        'password'=>Hash::make($request->password),
        'role'=>$request->role
    ]);

    teacher_info::create([
        'user_id'=>$user->id,
        'teacher_qualification'=>$request->teacher_qualification,
        'teacher_name'=>$request->first_name." ".$request->last_name
    ]);

    $user_id = $user->id;


    }

    if($request->role == 'Student'){
        $rules = [
            'first_name'=>'required',
            'last_name'=>'required',
            'class'=>'required',
            'school'=>'required',
            'mobile_number'=>['required','unique:users','regex:/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/'],
            'password'=>'required|confirmed',





        ];
    $customMessages = [
        'first_name.required' => 'First Name Field is Rquired.',
        'last_name.required'=>'Last Name filed is required',
        'class.required' => 'Class Field is Rquired.',
        'school.required' => 'School Field is Rquired.',
        'mobile_number.required'=>'Mobile number filed is required',
        'password.required'=>'Password filed is required',


    ];

    $validator = Validator::make( $request->all(), $rules, $customMessages );


    if($validator->fails())
    {
        return redirect()->back()->withInput()->with('errors',collect($validator->errors()->all()));
    }

    $user = user::create([
        'mobile_number'=>$request->mobile_number,
        'password'=>Hash::make($request->password),
        'role'=>$request->role
    ]);

    student_info::create([
        'user_id'=>$user->id,
        'st_school'=>$request->school,
         'st_class'=>$request->class,
        'st_name'=>$request->first_name." ".$request->last_name
    ]);

    $user_id = $user->id;
    }


    $otp = mt_rand(1000,9999);
     $this->otp($request->mobile_number,$otp);
     user_otp::create([
         'user_id'=>$user_id,
            'otp'=>$otp
     ]);

     return view('otp',compact('user_id'));




    }
    public function otp($mobile_number,$otp)
    {
        //file_put_contents('test.txt',$mobile_number." ".$otp);
        $mobile_number = '88'.$mobile_number;
        $url = "http://gsms.pw/smsapi";
     $data = [
    "api_key" => "C2000343610a798a92fde7.49639094",
    "type" => "text",
    "contacts" => $mobile_number,
    "senderid" => "8809601001329",
    "msg" => "Your Shikhboamra OTP is ".$otp,
  ];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 // $response = curl_exec($ch);
  curl_close($ch);
  //return $response;

    }

    public function submit_otp(Request $request)
    {
        $user_id = $request->user_id;
        $otp = $request->otp;
        $check_otp = user_otp::where('user_id',$user_id)->where('otp',$otp)->first();
        if($check_otp)
        {
            user::where('id',$user_id)->update(['active_status'=>1]);
            $user = user::where('id',$user_id)->first();


            $user_role = $user->role;

            if($user_role == "Teacher")
            {
                Auth::login($user);
               // file_put_contents('test.txt',auth()->user()->id);
                return redirect()->to('teacher');
            }
            else if($user_role == 'Student')
            {
                Auth::login($user);
                return redirect()->to('student');
            }
        }
        else
        {
           return view('otp',['user_id'=>$user_id,'error'=>'OTP NOT MATCH']);
        }

    }
    public function login(Request $req)
    {
        $user = user::where('mobile_number', $req->input('mobile_number'))->first();
        if($user === null) {
            $req->session()->flash('msg', 'User Not Registered');
            return redirect()->to('login-view');
        }
        if(!BcryptHash::check($req->input('password'), $user->password)) {
            $req->session()->flash('msg', 'Wrong phone number/password');
            return redirect()->to('login-view');
        }
        Auth::login($user);
        $req->session()->put('user', $user);
        file_put_contents('test.txt',$user->role);
        if($user->role =='Teacher')
        return redirect()->to('teacher');
        if($user->role =='Student')
        return redirect()->to('student');

        //$user = user::where('mobile_number',$req->mobile_number)->where('password')
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
