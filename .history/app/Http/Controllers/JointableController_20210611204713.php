<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JointableController extends Controller
{
    function index()
    {
    	$data = Country::join('mark', 'mark.e_no', '=', 'student.e_no')
              		->get(['student.e_no', 'mark.sub1',  'mark.sub2', 'mark.sub3', 'mark.sub4',]);

        return view('join_table', compact('data'));
    }
}
