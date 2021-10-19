<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum_question_reply extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'user_id',
        'question_id'
    ];

    public function question() {
        return $this->belongsTo(forum_question::class, 'question_id', 'id');
    }
    public function user() {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
