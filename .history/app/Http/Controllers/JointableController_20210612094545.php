<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Student;
use App\Models\Student;

class JointableController extends Controller
{
    function index()
    {
    	$data = Student::join('mark', 'mark.e_no', '=', 'student.e_no')
              		->get(['student.e_no', 'mark.sub1',  'marks.sub', 'mark.sub3', 'mark.sub4',]);

        return view('join_table', compact('data'));
    }
}
