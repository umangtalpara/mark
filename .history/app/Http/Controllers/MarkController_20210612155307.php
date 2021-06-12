<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use DB;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_marks = Mark::all();
        return view ('mark.index',[
            "marks" => $all_marks
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
        return view ('mark.add-mark');
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
        $mark->e_no =$request->student_id;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Mark  $mark
    //  * @return \Illuminate\Http\Response
     */

    public function edit($id)
    { {
            $mark = Mark::find($id);
            return view('mark.edit-mark', [
                "mark" => $mark
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mark  $mark
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $mark =Mark::find($id);
        $mark->e_no =$request->student_id;
        $mark->sub1=$request->sub1;
        $mark->sub2=$request->sub2;
        $mark->sub3=$request->sub3;
        $mark->sub4=$request->sub4;
        $mark->total=$request->total;
        $mark->avg=$request->avg;
       
        $mark->save();
        $request->session()->flash("success", "mark updated successfully");
        return redirect("mark");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark = Mark::find($id);
        $mark->delete();
        return redirect()->route('mark.index')->with("success", " mark deleteed successfully");
    }
}
