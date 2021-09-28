<?php

use App\Http\Controllers\CourseExamController;
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
