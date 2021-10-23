<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $fillable = [
        'st_id',
        'course_id',
        'rating',
        'review'
    ];
    // public function user() {
    //     return $this->belongsTo(user::class, 'st_id', 'id');
    // }

    public function user_info()
    {
        return $this->belongsTo('App\Models\User','st_id','id');
    }

}
