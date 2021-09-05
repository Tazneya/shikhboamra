<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('signup','filecontroller@signup');
Route::get('login','filecontroller@login');
Route::get('instructor_courses','filecontroller@instructor_courses');
Route::get('course_details','filecontroller@course_details');
Route::get('ci_edit','filecontroller@ci_edit');
Route::get('video_add','filecontroller@video_add');
Route::get('note_add','filecontroller@note_add');
Route::get('add_new_exam','filecontroller@add_new_exam');
Route::get('add_question','filecontroller@add_question');
Route::get('create_new_course','filecontroller@create_new_course');
Route::get('instructor_all_review','filecontroller@instructor_all_review');
Route::get('instructor_analytics','filecontroller@instructor_analytics');
Route::get('analytics_table','filecontroller@analytics_table');
Route::get('student_prograss','filecontroller@student_prograss');
Route::get('course_progration','filecontroller@course_progration');
Route::get('exam_performance','filecontroller@exam_performance');
Route::get('details_que_ans','filecontroller@details_que_ans');
Route::get('instructorhome','filecontroller@instructorhome');
Route::get('course_video','filecontroller@course_video');
Route::get('course_note','filecontroller@course_note');
Route::get('course_exam','filecontroller@course_exam');
Route::get('add_new_qus','filecontroller@add_new_qus');

