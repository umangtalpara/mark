<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class MarkController extends Controller
{
    //
    public function index()
    {
        //
        {
            return view('teacher');
        }
    }

    public function create()
    {
        //
        return view('mark.add-mark');
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
        return redirect ('/student');
    }

    public function edit(Mark $mark , $id)
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
        $mark->e_no =$request->e_no;
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
