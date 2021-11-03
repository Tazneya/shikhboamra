<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st_answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'question_id',
        'user_id',
        'response',
        'correct'
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\question','question_id','id');
    }

}
