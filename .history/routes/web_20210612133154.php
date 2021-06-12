<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\JointableController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('join_table', [JointableController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/teacher/home', [App\Http\Controllers\HomeController::class, 'teacherHome'])->name('teacher.home')->middleware('is_admin');


Route::resource('teacher',TeacherController::class);
Route::resource('semester',SemesterController::class);
Route::resource('student',StudentController::class);
Route::resource('mark', MarkController::class);
