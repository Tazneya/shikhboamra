<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //use HasFactory;
    protected $guarded = [];
    public function teacher()
    {
        return $this->belongsTo('App\Models\teacher_info','teacher_id','user_id');
    }

    public function video()
    {
        return $this->hasMany('App\Models\course_content','course_id','id')->where('active_status',1)->where('delete_status',0);
    }

    public function rating()
    {

        return $this->hasMany('App\Models\review','course_id','id');
    }

    public function enroll_count()
    {
        return $this->hasMany('App\Models\st_course','course_id','id');
    }
    public function video_count()
    {
        return $this->hasMany('App\Models\course_content','course_id','id')->where('content_type','video');
    }



}
