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
Route::get('login','filecontroller@login')->name('login-view');
Route::post('login', 'AuthController@login')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::post('signup','AuthController@signup')->name('signup');
Route::get('test','ReportController@analytics_report');

//Route::view('otp','otp');
Route::post('submit_otp','AuthController@submit_otp')->name('submit_otp');
Route::group(['prefix' => 'teacher'], function()
{
    Route::get('/','filecontroller@instructorhome');

    Route::get('course_details','filecontroller@course_details');
    Route::get('ci_edit','filecontroller@ci_edit');

    Route::get('note_add','filecontroller@note_add');
    Route::get('add_new_exam/{course_id?}','filecontroller@add_new_exam');
    Route::post('add_new_exam', 'CourseExamController@create')->name('add_new_exam_post');
    Route::get('add_question/{exam_id?}','filecontroller@add_question');
    Route::get('create_new_course','filecontroller@create_new_course');
    Route::get('instructor_all_review','filecontroller@instructor_all_review');
    Route::get('instructor_analytics','filecontroller@instructor_analytics');
    Route::get('analytics_table','filecontroller@analytics_table');
    Route::get('student_prograss','filecontroller@student_prograss');
    Route::get('course_progration','filecontroller@course_progration');
    Route::get('exam_performance','filecontroller@exam_performance');
    Route::get('details_que_ans','filecontroller@details_que_ans');
    Route::get('course_review/{id}','CourseController@course_review');
    Route::get('course_forum/{id}','ForumController@teacherForum');
    Route::get('course_report','ReportController@course_report')->name('course_report');
    Route::get('course_report/student_details/{id}','ReportController@student_details');
    Route::get('course_report/student_details/student_progress/{student_id}','ReportController@analytics_report');
    Route::get('course_report/student_details/exam_details/{course_id}/{student_id}','ReportController@exam_details');
    Route::get('course_report/student_details/exam_details/answer_sheet/{exam_id}/{student_id}','ReportController@answer_sheet');
    Route::get('course_exam/{course_id?}','filecontroller@course_exam')->name('course_exams');
    Route::get('add_new_qus/{exam_id?}','filecontroller@add_new_qus');
    Route::post('add_new_qus/{exam_id?}','QuestionController@create')->name('add_new_question');


    Route::get('instructor_courses','CourseController@show_all_course')->name('show_all_course_teacher');
    Route::post('add_course','CourseController@add_course')->name('add_course');
    Route::get('course_video/{id}','VideoController@show_all_video_teacher')->name('course_video');
    Route::get('course_video/{id}/add','VideoController@video_add_ui')->name('add_course_video_ui');
    Route::post('add_content_video','VideoController@add_content_video')->name('add_content_video');

    Route::get('course_note/{id}','NoteController@show_all_note_teacher')->name('course_note');
    Route::get('course_note/{id}/add','NoteController@note_add_ui')->name('add_course_note_ui');
    Route::post('add_content_note','NoteController@add_content_note')->name('add_content_note');



});

Route::group(['prefix' => 'student'], function()
{
    Route::get('/','StudentHomeController@index');
    Route::get('course_details/{id}','StudentCourseController@show_course_details')->name('show_course_details');
    Route::get('course_details_enrolled/{id}','StudentCourseController@show_course_details_enrolled')->name('show_course_details-enrolled');
    Route::post('course_enroll','StudentCourseController@course_enroll')->name('course_enroll');
    Route::post('filter_course','StudentHomeController@filter_course')->name('filter_course');
    Route::get('my_courses','StudentHomeController@my_course');
    
    Route::get('course_details_enrolled/video/{id}','VideoController@show_video_preview');
    Route::get('exam_confirmation/{exam_id}', 'StudentCourseController@exam_confirmation')->name('exam_confirmation_page');
    Route::get('exam_page/{exam_id}', 'StudentCourseController@exam_page')->name('exam_page');
    Route::get('exam_result/{exam_id}', 'StudentCourseController@exam_result')->name('exam_result');
    Route::get('course_details_enrolled/note/{id}','NoteController@note_preview');
    Route::get('course_report','ReportController@course_report_student');
    Route::get('course_report/exam_details/{course_id}','ReportController@exam_details_student');
    Route::get('course_report/answer_sheet/{exam_id}','ReportController@student_answer_sheet');
    Route::get('analytics','ReportController@analytics_report_student');
    
});




