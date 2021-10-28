<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st_exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'st_id',
        'exam_id',
        'obtaining_marks'
    ];

    public function exam()
    {
        return $this->belongsTo('App\Models\course_exam','exam_id','id');
    }
}
