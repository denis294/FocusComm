<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use App\Models\Actualite;
use Session;
use Request;
use App\Lib\Message;
use Illuminate\Support\Facades\Response;
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
      $user_id = Session::get('user_id');
      $user = User::find($user_id);
      if(!$user->hasRole('create', 'actualites')){
        return Response::view('errors.403',['url' => redirect()->back()->getTargetUrl(),'message'=>"Vous n'avez pas les droits pour créer des actualités"], 403);
      }
    return view('admin/actualite/formulaire')->with('categories', Categorie::all())->with('news', Actualite::all());
  }
    
    // Enregistre une actualité dans la base de données
    public function store()
    {
      $user_id = Session::get('user_id');
      $user = User::find($user_id);
      if(!$user->hasRole('create', 'actualites')){
        return Response::view('errors.403',['url' => redirect()->back()->getTargetUrl(),'message'=>"Vous n'avez pas les droits pour créer des actualités"], 403);
      }
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
       Message::success('actu.created');
       return redirect('/admin/actualites');
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
      $user_id = Session::get('user_id');
      $user = User::find($user_id);
      if(!$user->hasRole('update', 'actualites')){
        return Response::view('errors.403',['url' => redirect()->back()->getTargetUrl(),'message'=>"Vous n'avez pas les droits pour mettre à jour les actualites"], 403);
      }
      $actu = DB::table('actualites')->where('id', '=', $id)->get();
      $actu = json_encode($actu);
      return view('admin/actualite/edit')->with('actu', $actu)->with('allActus', Actualite::all())->with('categories',Categorie::all());
    }
    
    // Met à jour une actualité
    public function update($id)
    {
      $user_id = Session::get('user_id');
      $user = User::find($user_id);
      if(!$user->hasRole('update', 'actualites')){
        return Response::view('errors.403',['url' => '/admin/actualites','message'=>"Vous n'avez pas les droits pour à jour les actualités"], 403);
      }
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
       Message::success('actu.edited');
       return redirect('/admin/actualites');
    }
    
    // Supprime une actualité
    public function destroy($id)
    {
      $user_id = Session::get('user_id');
      $user = User::find($user_id);
      if(!$user->hasRole('delete', 'actualites')){
        return Response::view('errors.403',['url' => redirect()->back()->getTargetUrl(),'message'=>"Vous n'avez pas les droits pour supprimer les actualites"], 403);
      }
       $actu = Actualite::find($id);
       if (!isset($actu)) {
           Message::error('actu.missing');
           return redirect()->back()->withInput();
       }
       $actu->delete();
        Message::success('actu.deleted');
       return redirect('/admin/actualites');
    }
    

    
}

