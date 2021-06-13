<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $student = Student::find(3);
             $marks= $student->marks;
                return view('home', [
                "marks" => $marks
            ]);
    }
    public function teacherHome()
    {
        return view('teacher');
    }
    public function adminHome()
    {
        return view('admin');
    }

    // public function studentlist()
    // {
       
    //     $all_students = Student::all();
    //     return view('teacher.student-list', [
    //         "students" => $all_students
    //     ]);
    // }
}
