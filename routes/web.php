<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('home');
});

// Teachers
Route::get('teachers', [TeacherController::class, 'index']);
Route::get('teachers/create', [TeacherController::class, 'create']);
Route::post('teachers/store', [TeacherController::class, 'store']);
Route::get('teachers/show/{teacher}', [TeacherController::class, 'show']);
Route::get('teachers/edit/{teacher}', [TeacherController::class, 'edit']);
Route::put('teachers/update/{teacher}', [TeacherController::class, 'update']);
Route::delete('teachers/destroy/{teacher}', [TeacherController::class, 'destroy']);

//Students
Route::get('students', [StudentController::class, 'index']);
Route::get('students/create', [StudentController::class, 'create']);
Route::get('students/show/{student}', [StudentController::class, 'show']);
Route::get('students/edit/{student}', [StudentController::class, 'edit']);
Route::put('students/update/{student}', [StudentController::class, 'update']);
Route::post('students/store', [StudentController::class, 'store']);
route::delete('students/destroy/{student}', [StudentController::class, 'destroy']);
