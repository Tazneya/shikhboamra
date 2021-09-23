<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Utils extends Controller
{
    //
    public static function getDurationString($duration)
    {
        
        $hour = (int)floor($duration/3600);        
        $duration = $duration-($hour * 3600);
        $minute = (int)floor($duration/60);
        $duration = $duration-($minute * 60);
        $second = (int)floor($duration);
        $second_str = '';
        if($hour !== 0 || $minute !== 0) {
            if($second !== 0) {
                $second_str = $second.'s';
            }
        } else {
            $second_str = $second.'s';
        }
        return ($hour > 0 ? $hour.'h ':'').($minute > 0 ? $minute.'m ':'').($second_str);
    }
}
