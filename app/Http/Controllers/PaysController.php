<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Pays;
use Session;
use DB;
use Request;

class PaysController extends Controller
{
	// Affiche tous les pays
    public function index()
    {
        return Pays::all();
    }
}
