<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Student;
use App\Models\Student;

class JointableController extends Controller
{
    function index()
    {
    	$data = Student::join('marks', 'marks.e_no', '=', 'students.e_no')
              		->get(['students.e_no', 'marks.sub1',  'marks.sub2', 'marks.sub3', 'marks.sub4',]);
        $student = Student::find(3);
        return view('join_table', compact('data'));
        // return view('join_table');
        
        // return $student->marks;
    }
}
