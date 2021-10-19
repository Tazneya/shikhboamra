<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum_question extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'user_id',
        'course_id'
    ];

    public function replies()
    {
        return $this->hasMany(forum_question_reply::class, 'question_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
