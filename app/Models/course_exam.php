<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'exam_name',
        'duration',
        'total_marks'
    ];
}
