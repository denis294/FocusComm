<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quizz;
use App\Models\Categorie;
use App\Models\Badge;
use App\Models\Question;
use App\Models\Reponse;
use Session;
use Request;
use DB;
use App\Lib\Message;

class QuizzController extends Controller
{
	// Liste tous les quizzs
  public function index()
  {        
    $quizz = Quizz::all();
    $quizz = json_encode($quizz, JSON_UNESCAPED_UNICODE);
    
    return view('quizz/index')->with('quizz', $quizz);
  }
  public function MyQuizz(){
    $user_id = Session::get('user_id');
    $user = User::find($user_id);
    $quizzs = $user->quizzs()->with('categorie')->get();
    return view('/partner/quiz/index')->with('quizzs', $quizzs);
  }
  public function categoriesHasQuizz(){
    $cat = [];
    $categories = Categorie::has('quizzs')->with('categorieParent')->get();
    $c = 0;
    foreach ($categories as $categorie){
      if($categorie->categorieParent !== null){
        $cat['categories'][$c]['id'] = $categorie->categorieParent->id;
        $cat['categories'][$c]['nom'] = $categorie->categorieParent->nom;
        $c++;
      }
      else{
        $cat['categories'][$c]['id'] = $categorie->id;
        $cat['categories'][$c]['nom']  = $categorie->nom;
        $c++;
      }
    } 
    $cat = json_encode($cat);
    return view('quizz/index')->with('categories', $cat);
  }

  public function indexAdmin()
  {
    
  }
	
	//Liste tous les quizzs propres à une catégorie
	public function indexQuizz($categorie_id){
    $categories = Categorie::find($categorie_id);
    if(!isset($categories)){
      Message::error('categorie.missing');
      return redirect()->back()->withInput();
    }
    // File moi les quizz dont categorie_id vaut $id ou les quizz dont categorie_id fait référence à une catégorie qui a 
    // $id en categorieParente_id
    $quizzs = DB::table('quizzs')->where('categorie_id', '=', $categorie_id)->get();
    $quizzs = json_encode($quizzs);
    return view('quizz/categorie')->with('quizz', $quizzs);
  }

	public function create()
  {
    return view('quizz/create');
  }
    
    // Enregistre un quizz dans la base de données
    public function store()
    {
       $fields = Request::all();
       $fields['date'] = date('Y-m-d');
       $fields['etat'] = 'cache';
        $validate = Quizz::validate($fields);
       if ($validate->fails()) {
          return redirect()->back()->withInput()->withErrors($validate);
       }
       
       // Vérifie la non existance du quizz
       $titreInput = $fields['titre'];
       $dateInput = $fields['date'];
       $quizz = DB::table('quizzs')
        	->where('titre', '=', $titreInput)
        	->where('date', '=', $dateInput)
        	->get();
        	
       if (!empty($quizz)){
      	Message::error('quizz.alreadyExists');
      	return redirect()->back()->withInput();
       }
       
       // Vérifie que la catégorie spécifie existe
       $categorie = Categorie::find($fields['categorie_id']);
       if (!isset($categorie)){
      	Message::error('categorie.missing');
      	return redirect()->back()->withInput();
       }
       
       // Vérifie que le badge spécifié existe
       if(isset($fields['badge_id'])){
          $badge = Badge::find($fields['badge_id']);
          if (!empty($badge)){
            if (!isset($badge)){
              Message::error('badge.missing');
              return redirect()->back()->withInput();
            }
          }
       }
       
       $quizz = new Quizz($fields);
       $user = User::find(Session::get('user_id'));

       $user->quizzs()->save($quizz);

       foreach ($fields['question'] as $question) {
          $q = new Question($question);
          $quizz->questions()->save($q);
          foreach ($question['reponse'] as $reponse) {
            $rep = new Reponse($reponse);
            $q->reponses()->save($rep);
          }
       }
       return redirect()->action('QuizzController@MyQuizz');
       
    }
	
	// Affiche un quizz spécifique
    public function show($id)
    {
       $quizzs = Quizz::find($id);
       if (!isset($quizzs)) {
      	Message::error('quizz.missing');
      	return redirect()->back()->withInput();
       }
       return $quizzs;
    }
    public function edit($id)
    {
        //
    }
    
    // Met à jour un quizz
    public function update($id)
    {
       $badge = Quizz::find($id);
       if (!isset($badge)) {
      	Message::error('quizz.missing');
      	return redirect()->back()->withInput();
       }
       $fields = Request::all();
       if (!Quizz::validate($fields)) {
      	Message::error('form.fieldsError');
      	return redirect()->back()->withInput();
       }
       $badge->update($fields);
       return $badge;
    }
    
    // Supprime un quizz
    public function destroy($id)
    {
       $quizz = Quizz::find($id);
       if (!isset($quizz)) {
      		Message::error('quizz.missing');
      		return redirect()->back()->withInput();
       }
       $quizz->delete();
       return $quizz;
    }
    
    public function playQuizz($id){
      $quizz = Quizz::find($id);
      if(!isset($quizz)){
      		Message::error('quizz.missing');
      		return redirect()->back()->withInput();
      }
      if ($quizz->etat != 'publie'){
      		Message::error('quizz.notPublished');
      		return redirect()->back()->withInput();
      }
      return view ('quizz/play')->with('quizz', $quizz)->with('badges',$quizz->badge)->with('questions',$quizz->questions()->with('reponses')->get());
    }

    
}

