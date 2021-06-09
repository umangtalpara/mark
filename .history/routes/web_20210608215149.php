<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;


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
    return view('welcome');
});
Route::get('/student-list', function () {
    return view('teacher.student-list');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/teacher/home', [App\Http\Controllers\HomeController::class, 'teacherHome'])->name('student')->middleware('is_admin');
Route::get('/student-liist', [App\Http\Controllers\HomeController::class, 'studentlist'])->name('student.list');

Route::resource('teacher',TeacherController::class);
Route::resource('semester',SemesterController::class);
Route::resource('student',StudentController::class);
Route::resource('mark', MarkController::class);
