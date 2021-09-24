<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st_course extends Model
{
    //use HasFactory;
    protected $guarded = [];

    public function enroll_course()
    {
        return $this->belongsTo('App\Models\course','course_id','id')->where('active_status',1)->where('delete_status',0);
    }


}
