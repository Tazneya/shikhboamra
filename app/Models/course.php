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


}
