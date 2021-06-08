<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    //
    public function index()
    {
        //
        {
            return view('admin');
        }
    }

    public function create()
    {
        //
        return view('teacher.add-mark');
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
        $mark =new Mark();
        $mark->e_no =$request->e_no;
        $mark->sub1=$request->sub1;
        $mark->sub2=$request->sub2;
        $mark->sub3=$request->sub3;
        $mark->sub4=$request->sub4;
        $mark->total=$request->total;
        $mark->avg=$request->avg;

       
        $mark->save();

        // $request->session()->flash("success",'todo has been added');
        return redirect ('/mark');
    }
}
