<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use Session;
use Request;
use DB;
use App\Lib\Message;

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
      		Message::error('categorie.missing');
      		return redirect()->back()->withInput();
        }
        $result = DB::table('categories')->where('categorieParente_id', '=', $categorie_id)->get();
        if(empty($result)){
      		Message::error('categorie.sousCategorieMissing');
      		return redirect()->back()->withInput();
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
       $fields = Request::only('nom', 'icone', 'description','categorieParente_id');
       if (!Categorie::validate($fields)) {
           Message::error('form.fieldsError');
           return redirect()->back()->withInput();
       }
       
       // Vérifie que la catégorie parente existe
       $categorie = Categorie::find($fields['categorieParente_id']);
       if (!empty($categorie)){
       		if (!isset($categorie)){
      		Message::error('categorie.missing');
      		return redirect()->back()->withInput();
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
      		Message::error('categorie.missing');
      		return redirect()->back()->withInput();
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
       $categorie = Categorie::find($id);
       if (!isset($actu)) {
      		Message::error('categorie.missing');
      		return redirect()->back()->withInput();
       }
       $fields = Request::all();
       if (!Categorie::validate($fields)) {
           Message::error('form.fieldsError');
           return redirect()->back()->withInput();
       }
       $categorie->update($fields);
       return $categorie;
    }
    
    // Supprime une catégorie
    public function destroy($id)
    {
       $categorie = Categorie::find($id);
       if (!isset($actu)) {
      		Message::error('categorie.missing');
      		return redirect()->back()->withInput();
       }
       $categorie->delete();
       return $categorie;
    }
    
    
}

