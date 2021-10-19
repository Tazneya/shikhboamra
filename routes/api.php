<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseExamController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/student/exam_page/load_question/{exam_id}', [QuestionController::class, 'apiServeExamQuestion']);
Route::post('/student/exam/submit', [CourseExamController::class, 'apiSubmitAnswers']);
Route::post('/student/course/review/create', [CourseController::class, 'apiCreateRating']);
Route::get('/student/course/rating_summary/{course_id}', [CourseController::class, 'apiGetCourseRatings']);
Route::get('/student/course/reviews/get/{course_id}', [CourseController::class, 'apiGetReviews']);
Route::get('/forum/questions/{course_id}', [ForumController::class, 'getQuestions']);
Route::get('/forum/questions/replies/{question_id}', [ForumController::class, 'getAllReplys']);
Route::post('/forum/questions/create', [ForumController::class, 'apiCreateQuestion']);
Route::post('/forum/questions/reply/create', [ForumController::class, 'apiCreateQuestionReply']);