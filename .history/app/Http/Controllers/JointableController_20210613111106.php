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
    $book = $this->bookModel
    ->join('marks', 'marks.e_no', '=', 'students.e_no')
    ->where('mark.id', '=', $id)
    ->select('mark.*', '')
    ->first();
        // return view('join_table', compact('data'));
       
        {
            // $student = Student::find(5);
            // return view('join_table', [
            //     "student" => $student->marks
            // ]);

             $student = Student::find(4);
            //  dd($student);
             $students= $student->marks;
            // dd($students);
        return view('join_table', [
                "student" => $students
            ]);
           
    }
}
}
