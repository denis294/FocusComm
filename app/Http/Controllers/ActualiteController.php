<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use App\Models\Actualite;
use Session;
use Request;

class ActualiteController extends Controller
{
	// Liste toutes les actualités
    public function index()
    {        
       return Actualite::all();
    }
   
	 public function create()
    {
        //
    }
    
    // Enregistre une actualité dans la base de données
    public function store()
    {
       $fields = Request::only('titre', 'dateCreation', 'texte', 'image', 'actualiteLiee_id', 'categorie_id');
       if (!Actualite::validate($fields)) {
           return response('Fields error', 400);
       }
       $categorie = Categorie::find($fields['categorie_id']);
       if (!isset($categorie)){
       	   return response ('Catégorie non trouvée', 404);
       }
       $actu = new Actualite($fields);
       $user = User::find(Session::get('user_id'));
       $user->actualites()->save($actu);
       return $actu;
    }
	
	// Liste toutes les actualités
    public function show($id)
    {
       $actus = Actualite::find($id);
       if (!isset($actus)) {
           return response('Not found', 404);
       }
       return $actus;
    }
    public function edit($id)
    {
        //
    }
    
    // Met à jour une actualité
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
    
    // Supprime une actualité
    public function destroy($id)
    {
       $actu = Actualite::find($id);
       if (!isset($actu)) {
           return response('Not found', 404);
       }
       $actu->delete();
       return $actu;
    }
    

    
}

