<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JointableController extends Controller
{
    function index()
    {
    	$data = Country::join('state', 'state.country_id', '=', 'country.country_id')
              		->get(['country.country_name', 'state.state_name', 'city.city_name']);

        return view('join_table', compact('data'));
    }
}
