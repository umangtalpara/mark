<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Student;
use App\Models\Student;

class JointableController extends Controller
{
    function index()
    {
    // 	$data = Student::join('marks', 'marks.e_no', '=', 'students.e_no')
    //           		->get(['students.e_no', 'marks.sub1',  'marks.sub2', 'marks.sub3', 'marks.sub4',]);
       
        // return view('join_table', compact('data'));
       
        {
            $student = Student::find($id);
            return view('student2.edit-student', [
                "student" => $student
            ]);

            //  $student = Student::find(4);
            //  dd($student);
            //  return $student= $student->marks;

        // return view('join_table', [
        //         "student" => $student
        //     ]);
    }
}
}