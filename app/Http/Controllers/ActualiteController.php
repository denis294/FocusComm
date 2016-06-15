<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use App\Models\Actualite;
use Session;
use Request;
use App\Lib\Message;
use DB;

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
    return view ('admin/actualite/liste')->with('news', $news);
  }
   
	public function create()
  {
    return view('admin/actualite/formulaire')->with('categories', Categorie::all());
  }
    
    // Enregistre une actualité dans la base de données
    public function store()
    {
       $fields = Request::only('titre', 'dateCreation', 'texte', 'image', 'actualiteLiee_id', 'categorie_id');
       $validate = Actualite::validate($fields);
       if ($validate->fails()) {
          return redirect()->back()->withInput()->withErrors($validate);
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
    // Formulaire d'édition d'actualité
    public function edit($id)
    {
        
    $actu = DB::table('actualites')->where('id', '=', $id)->get();
    $actu = json_encode($actu);
    return view('admin/actualite/edit')->with('actu', $actu)->with('allActus', Actualite::all())->with('categories', Categorie::all());
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
        $validate = Actualite::validate($fields);
       if ($validate->fails()) {
          return redirect()->back()->withInput()->withErrors($validate);
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

