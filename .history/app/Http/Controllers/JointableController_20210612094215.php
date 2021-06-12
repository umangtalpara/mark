<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class JointableController extends Controller
{
    function index()
    {
    	$data = Students::join('marks', 'marks.e_no', '=', 'students.e_no')
              		->get(['students.e_no', 'marks.sub1',  'marks.sub2', 'marks.sub3', 'marks.sub4',]);

        return view('join_table', compact('data'));
    }
}