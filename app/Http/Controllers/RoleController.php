<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Session;
use DB;
use Request;

class RoleController extends Controller
{
	// Affiche tous les roles
    public function index()
    {
        return Role::all();
    }
    
	// Crée un nouveau rôle
    public function create()
    {
        //
    }

	// Enregistre un nouveau rôle
    public function store()
    {
		//
    }

	// Edite un roles
    public function edit($id)
    {
        //
    }

    // Met à jour une région
    public function update($id)
    {
		//
    }

	// Supprime le role
    public function destroy($id)
    {
		//
	}
}