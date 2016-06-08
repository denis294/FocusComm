<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quizz;
use App\Models\Categorie;
use App\Models\Badge;
use Session;
use Request;
use DB;

class QuizzController extends Controller
{
	// Liste tous les quizzs
    public function index()
    {        
       return Quizz::all();
    }
	
	//Liste tous les quizzs propres à une catégorie
	public function indexQuizz($categorie_id){
        $categories = Categorie::find($categorie_id);
        if(!isset($categories)){
            return response('Catégorie inexistante.', 404);
        }
        $quizzs = DB::table('quizzs')->where('categorie_id', '=', $categorie_id)->get();
        return $quizzs;
    }
	 public function create()
    {
        //
    }
    
    // Enregistre un quizz dans la base de données (pas check)
    public function store()
    {
       $fields = Request::only('titre', 'date', 'texte', 'etat', 'badge_id', 'categorie_id');
       if (!Quizz::validate($fields)) {
           return response('Fields error', 400);
       }
       
       // Vérifie que la catégorie spécifie existe
       $categorie = Categorie::find($fields['categorie_id']);
       if (!isset($categorie)){
       	   return response ('Catégorie non trouvée', 404);
       }
       
       // Vérifie que le badge spécifié existe
       $badge = Badge::find($fields['badge_id']);
       if (!empty($badge)){
       		if (!isset($badge)){
       	   		return response ('Badge non trouvé', 404);
       		}
       }
       
       $quizz = new Quizz($fields);
       $user = User::find(Session::get('user_id'));
       $user->quizzs()->save($quizz);
       return $quizz;
       
    }
	
	// Liste tous les quizs (pas check)
    public function show($id)
    {
       $quizzs = Quizz::find($id);
       if (!isset($quizzs)) {
           return response('Not found', 404);
       }
       return $quizzs;
    }
    public function edit($id)
    {
        //
    }
    
    // Met à jour un quizz (pas check)
    public function update($id)
    {
       $quizz = Quizz::find($id);
       if (!isset($quizz)) {
           return response('Not found', 404);
       }
       $fields = Request::all();
       if (!Quizz::validate($fields)) {
           return response('Fields error', 400);
       }
       $quizz->update($fields);
       return $quizz;
    }
    
    // Supprime un quizz
    public function destroy($id)
    {
       $quizz = Quizz::find($id);
       if (!isset($quizz)) {
           return response('Not found', 404);
       }
       $quizz->delete();
       return $quizz;
    }
    

    
}

