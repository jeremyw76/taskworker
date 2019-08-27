<?php

use Illuminate\Http\Request;

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

Route::prefix('api/')->group(['middleware' => ['auth:api']], function() {
    Route::get('courses/{student_id}/{term}', 'CourseController@getCoursesForStudent');
    Route::get('tasks/{student_id}/{course_id}', 'TaskController@getTask');
    Route::post('task/{student_id}/{course_id}', 'TaskController@createTask');
});
