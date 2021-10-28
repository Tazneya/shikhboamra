<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
   use HasFactory;
    protected $guarded = [];

    public function student()
    {
        return $this->hasOne('App\Models\student_info','user_id','id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\teacher_info','user_id','id');
    }
    public function exam($course_id)
    {
        //file_put_contents('test.txt',$course_id);
        return $this->hasMany('App\Models\st_exam','st_id','id')->where('course_id',$course_id);
    }

}
