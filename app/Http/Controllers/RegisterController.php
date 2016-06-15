<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Region;

class RegisterController extends Controller
{
    public function index(){

    	$regions = Region::all();
    	return view('register')->with('regions',$regions);
    }
}
