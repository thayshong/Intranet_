<?php

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

Route::group(['prefix'=>'v1'], function(){
    // Professores
    Route::get('/teachers', function(){
        return response()->json([
            'data' => \App\Models\Teacher::get(
                ['id', 'name', 'created_at', 'updated_at']
            )
        ]);
    });

    // Classes
    Route::get('/classrooms', function(){
        return response()->json([
            'data' => \App\Models\Classroom::get(
                ['id', 'name', 'created_at', 'updated_at']
            )
        ]);
    });

    // Matérias
    Route::get('/subjects', function(){
        return response()->json([
            'data' => \App\Models\Subject::get(
                ['id', 'name', 'created_at', 'updated_at']
            )
        ]);
    });

    // Estudantes
    Route::get('/students', function(){
        return response()->json([
            'data' => \App\Models\Student::get(
                ['id', 'name', 'gender', 'birth_date', 'cel', 'created_at', 'updated_at']
            )
        ]);
    });
});
