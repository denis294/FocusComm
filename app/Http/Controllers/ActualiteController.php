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
       $news = Actualite::all();
       $news = json_encode($news, JSON_UNESCAPED_UNICODE );
       return view('actualites/index')->with('news', $news);
    }

  public function indexAdmin(){
    $news = Actualite::all();
    $news = json_encode($news, JSON_UNESCAPED_UNICODE );
    return view ('admin/actualites/index');
  }
   
	public function create()
  {
    return view ('admin/actualites/create');
  }
    
    // Enregistre une actualité dans la base de données
    public function store()
    {
       $fields = Request::only('titre', 'dateCreation', 'texte', 'image', 'actualiteLiee_id', 'categorie_id');
       if (!Actualite::validate($fields)) {
           Message::error('form.fieldsError');
           return redirect()->back()->withInput();
       }
       $categorie = Categorie::find($fields['categorie_id']);
       if (!isset($categorie)){
           Message::error('categorie.missing');
           return redirect()->back()->withInput();
       }
       $actu = new Actualite($fields);
       $user = User::find(Session::get('user_id'));
       $user->actualites()->save($actu);
       return $actu;
    }
	
	// Affiche une actualité précise
    public function show($id)
    {
       $actus = Actualite::find($id);
       if (!isset($actus)) {
           Message::error('actu.missing');
           return redirect()->back()->withInput();
       }
       return $actus;
    }
    public function edit($id)
    {
        return view('admin/actualites/edit');
    }
    
    // Met à jour une actualité
    public function update($id)
    {
       $actu = Actualite::find($id);
       if (!isset($actu)) {
           Message::error('actu.missing');
           return redirect()->back()->withInput();
       }
       $fields = Request::all();
       if (!Actualite::validate($fields)) {
           Message::error('form.fieldsError');
           return redirect()->back()->withInput();
       }
       $actu->update($fields);
       return $actu;
    }
    
    // Supprime une actualité
    public function destroy($id)
    {
       $actu = Actualite::find($id);
       if (!isset($actu)) {
           Message::error('actu.missing');
           return redirect()->back()->withInput();
       }
       $actu->delete();
       return $actu;
    }
    

    
}

