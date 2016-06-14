<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use App\Models\Page;
use Session;
use Request;
use App\Lib\Message;
use DB;

class PageController extends Controller
{
	// Liste toutes les pages
    public function index()
    {        
       $pages = Page::all();
    }
	
	// Affiche les pages propres à une catégorie
    public function indexCategorie($categorie_id){
        $categorie = Categorie::find($categorie_id);
        if(!isset($categorie)){
  			Message::error('categorie.missing');
          	return redirect()->back()->withInput();
        }
        $pages = DB::table('pages')->where('categorie_id', '=', $categorie_id)->get();
        if(empty($pages)){
  			Message::error('categorie.noPages');
          	return redirect()->back()->withInput();
        }
        return $pages;
    }
    
    // Création d'un nouvelle page
	public function create(){
    	return view ('admin/page/formulaire');
  	}
    
    // Enregistre une page dans la base de données
    public function store()
    {
       $fields = Request::only('titre', 'contenu', 'categorie_id');
       $validate = Actualite::validate($fields);
       if ($validate->fails()) {
          return redirect()->back()->withInput()->withErrors($validate);
       }
       $categorie = Categorie::find($fields['categorie_id']);
       if (!isset($categorie)){
           Message::error('categorie.missing');
           return redirect()->back()->withInput();
       }
       $page = new Page($fields);
       $user = User::find(Session::get('user_id'));
       $user->actualites()->save($page);
       return $page;
    }
	
	// Affiche une page précise
    public function show($id)
    {
       $page = Page::find($id);
       if (!isset($page)) {
           Message::error('page.missing');
           return redirect()->back()->withInput();
       }
       return $page;
    }
    public function edit($id)
    {
        return view('admin/pages/edit');
    }
    
    // Met à jour une page
    public function update($id)
    {
       $page = Page::find($id);
       if (!isset($page)) {
           Message::error('page.missing');
           return redirect()->back()->withInput();
       }
       $fields = Request::all();
       $validate = Actualite::validate($fields);
       if ($validate->fails()) {
          return redirect()->back()->withInput()->withErrors($validate);
       }
       $page->update($fields);
       return $page;
    }
    
    // Supprime une page
    public function destroy($id)
    {
       $page = Page::find($id);
       if (!isset($page)) {
           Message::error('page.missing');
           return redirect()->back()->withInput();
       }
       $page->delete();
       return $page;
    }
    

    
}

