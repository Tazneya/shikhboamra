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

}
