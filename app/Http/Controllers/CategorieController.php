<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use Session;
use Request;
use DB;

class CategorieController extends Controller
{
	// Liste toutes les catégories
    public function index()
    {        
       return Categorie::all();
    }
    
    // Liste les catégories enfant d'une catégorie spécifiée
    public function indexEnfant($categorie_id){
        $categorie = Categorie::find($categorie_id);
        if(!isset($categorie)){
            return response('Catégorie inexistante', 404);
        }
        $result = DB::table('categories')->where('categorieParente_id', '=', $categorie_id)->get();
        if(empty($result)){
            return response ('Aucune sous-catégorie pour cette catégorie');
        }
        return $result;
    }
    
	 public function create()
    {
        //
    }
    
    // Enregistre une catégorie dans la base de données
    public function store()
    {
       $fields = Request::only('nom', 'categorieParente_id');
       if (!Categorie::validate($fields)) {
           return response('Fields error', 400);
       }
       
       // Vérifie que la catégorie parente existe
       $categorie = Categorie::find($fields['categorieParente_id']);
       if (!empty($categorie)){
       		if (!isset($categorie)){
       	   		return response ('Categorie non trouvée', 404);
       		}
       }
       $categorie = new Categorie($fields);
       $categorie->save();
       return $categorie;
       
    }
	
	// Affiche une catégorie précise

    public function show($id)
    {
       $categorie = Categorie::find($id);
       if (!isset($categorie)) {
           return response('Catégorie inexistante', 404);
       }
       return $categorie;
    }
    public function edit($id)
    {
        //
    }
    
    // Met à jour une catégorie
    public function update($id)
    {
       $actu = Categorie::find($id);
       if (!isset($actu)) {
           return response('Not found', 404);
       }
       $fields = Request::all();
       if (!Categorie::validate($fields)) {
           return response('Fields error', 400);
       }
       $actu->update($fields);
       return $actu;
    }
    
    // Supprime une catégorie
    public function destroy($id)
    {
       $actu = Categorie::find($id);
       if (!isset($actu)) {
           return response('Not found', 404);
       }
       $actu->delete();
       return $actu;
    }
    
    
}

