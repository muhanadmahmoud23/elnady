<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCourseController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('students', StudentController::class);
Route::resource('student-course', StudentCourseController::class);
Route::get('getCourseStudents/{id}', [StudentCourseController::class, 'getCourseStudents']);
Route::delete('deleteCourseStudents/{student_id}/{course_id}', [StudentCourseController::class, 'deleteCourseStudents']);

Route::get('score', [ScoreController::class, 'score']);
