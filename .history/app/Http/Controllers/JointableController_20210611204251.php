<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JointableController extends Controller
{
    function index()
    {
    	$data = Country::join('mark', 'mark.e_no', '=', 'student.e_no')
              		->get(['country.country_name', 'state.state_name', 'city.city_name']);

        return view('join_table', compact('data'));
    }
}
