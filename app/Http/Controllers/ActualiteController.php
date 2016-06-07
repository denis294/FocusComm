<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Actualite;
use Session;
use Request;

class ActualiteController extends Controller
{

    public function index()
    {        
       return Actualite::all();
    }
    
    public function indexMy()
    {        
       $actu = User::find(Session::get('user_id'));
       return $actu->actualites;
    }

    public function show($id)
    {
       $actus = Actualite::find($id);
       if (!isset($actus)) {
           return response('Not found', 404);
       }
       return $actus;
    }
    
    public function store()
    {
       $fields = Request::only('titre', 'texte', 'image', 'actualiteLiee_id', 'categorie_id');
       if (!Actualite::validate($fields)) {
           return response('Fields error', 400);
       }
       $actu = new Actualite($fields);
       $user = User::find(Session::get('user_id'));
       $user->actualites()->save($actu);
       return $actu;
    }
    
    public function destroy($id)
    {
       $actu = Actualite::find($id);
       if (!isset($actu)) {
           return response('Not found', 404);
       }
       $actu->delete();
       return $actu;
    }
    
    public function update($id)
    {
       $actu = Actualite::find($id);
       if (!isset($actu)) {
           return response('Not found', 404);
       }
       $fields = Request::all();
       if (!Actualite::validate($fields)) {
           return response('Fields error', 400);
       }
       $actu->update($fields);
       return $actu;
    }
    
}

