<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\User;
use Session;
use DB;
use Request;

class BadgeController extends Controller
{
	// Affiche tous les badges
    public function index()
    {
        return Badge::all();
    }

	// Crée un nouveau badge
    public function create()
    {
        //
    }

	// Enregistre un nouveau badge dans la BD
    public function store()
    {
       $fields = Request::only('titre', 'image');
       if (!Badge::validate($fields)) {
           return response('Fields error', 400);
       }

       $badge = new Badge($fields);
       $user = User::find(Session::get('user_id'));
       $user->badges()->save($badge);
       return $badge;
       
    }

	// Affiche un badge spécifique
    public function show($id)
    {
       $badge = Badge::find($id);
       if (!isset($badge)) {
           return response('Not found', 404);
       }
       return $badge;
    }

	// Edite un badge
    public function edit($id)
    {
        //
    }

    // Met à jour un badge (pas check)
    public function update($id)
    {
       $badge = Badge::find($id);
       if (!isset($badge)) {
           return response('Not found', 404);
       }
       $badge = Request::all();
       if (!Badge::validate($fields)) {
           return response('Fields error', 400);
       }
       $badge->update($fields);
       return $badge;
    }

	// Supprime le badge (pas check)
    public function destroy($id)
    {
       $badge = Badge::find($id);
       if (!isset($badge)) {
           return response('Not found', 404);
       }
       $badge->delete();
       return $badge;
    }
}
