<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_students = Student::all();
        return view('student.index', [
            "students" => $all_students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.add-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = new Student();
        $student->e_no = $request->e_no;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password =Hash::make($request->password); 
        $student->mobile = $request->mobile;
        $student->dob = $request->dob;
        $student->address = $request->address;

        $student->save();

        // $request->session()->flash("success",'todo has been added');
        return redirect('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    { {
            $student = Student::find($id);
            return view('teacher.edit-student', [
                "student" => $student
            ]);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::find($id); 
        $student->e_no = $request->e_no;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password =Hash::make($request->password);
        $student->mobile = $request->mobile;
        $student->dob = $request->dob;
        $student->address = $request->address;

        $student->save();

        $request->session()->flash("success", "student updated successfully");
        return redirect("teacher");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('teacher.index')->with("success", " student deleteed successfully");
    }
}
