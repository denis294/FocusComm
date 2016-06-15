<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Models\User;
use Hash;
use Session;
use Redirect;
use App\Lib\Message;

class AuthController extends Controller
{
	public function login(){

  		$password = Request::input('motDePasse', '');
  		$email = Request::input('email', '');
  		$pseudo = Request::input('pseudo', '');

  		// Si l'utilisateur renseigne son pseudo
  		if (!empty($pseudo)){
  			
  			$user = User::where("pseudo", $pseudo)->first();
  			
  			// Vérifie que le pseudo existe dans la BD
  			if (!isset($user)) {
  			   Message::error('user.missing');
          return redirect()->back()->withInput();
  			}

  			
  			// Vérifie le password et le hash
  			if (!Hash::check($password, $user->motDePasse)) {
      		Message::error('user.mauvaisMDP');
          return redirect()->back()->withInput();
  			}
  			Session::put('user_id', $user->id);
        Session::put('pseudo', $user->pseudo);
  			return Redirect::to('/')->with('success','Connexion réussie');
       }
       
  		// Sinon, si l'utilisateur renseigne son email
  		else if (!empty($email)){
  			
  			$user = User::where("email", $email)->first();
  			
  			// Vérifie que l'e-mail existe dans la BD
  			if (!isset($user)) {
          Message::error('user.missing');
          return redirect()->back()->withInput();
  			}
  			
  			// Vérifie le password et le hash
  			if (!Hash::check($password, $user->motDePasse)) {
          Message::error('user.mauvaisMDP');
          return redirect()->back()->withInput();
  			}
  			Session::put('user_id', $user->id);
        Session::put('pseudo', $user->pseudo);
  			return Redirect::to('/')->with('success','Connexion réussie');
       }
	}
	
	public function logout()
	{
    	Session::forget('user_id');
      Message::success('acces.deconnecte');
    	return redirect()->route('login');
	}
  // Contrôle la connexion au panneau d'administration
  public function loginAdmin(){
    $fields = Request::only('pseudo', 'motDePasse');
    $user = User::where('pseudo',$fields['pseudo'])->first();
    if (!isset($user)) {
      Message::error('user.missing');
      return redirect()->back()->withInput();
    }
    // Vérifie le password et le hash
    if (!Hash::check($fields['motDePasse'], $user->motDePasse)) {
      Message::error('user.mauvaisMDP');
      return redirect()->back()->withInput();
    }

    $groups = $user->groups;
    foreach ($groups as $group) {
      if($group->nom == 'admin'){
        Session::put('user_id', $user->id);
        Session::put('group', $group->nom);
        return view('admin/accueil');
      }
      else{
        Message::error('user.noAdminAccess');
        return redirect()->back()->withInput();
      }
    }

  }
  public function logoutAdmin()
  {
      Session::forget('user_id');
      Session::forget('group');
      return Redirect::to('admin')->with('success','Déconnexion réussie');
  }
  public function loginPartner(){
    $fields = Request::only('pseudo', 'motDePasse');
    $user = User::where('pseudo',$fields['pseudo'])->first();
    if (!isset($user)) {
      Message::error('user.missing');
      return redirect()->back()->withInput();
    }
    // Vérifie le password et le hash
    if (!Hash::check($fields['motDePasse'], $user->motDePasse)) {
      Message::error('user.mauvaisMDP');
      return redirect()->back()->withInput();
    }

    $groups = $user->groups;
    foreach ($groups as $group) {
      if($group->nom == 'participant'){
        Session::put('user_id', $user->id);
        Session::put('group', $group->nom);
        return view('partner/index');
      }
      else{
        Message::error('user.noAdminAccess');
        return redirect()->back()->withInput();
      }
    }

  }
  public function logoutPartner()
  {
      Session::forget('user_id');
      Session::forget('group');
      return Redirect::to('partner')->with('success','Déconnexion réussie');
  }
}
