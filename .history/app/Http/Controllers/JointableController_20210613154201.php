<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class JointableController extends Controller
{
    function index()
    {
        $student = Student::find(3);
        $marks = $student->marks;
        return view('home', [
            "marks" => $marks
        ]);
    }
}
