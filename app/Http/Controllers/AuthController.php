<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
	public function login(){
  		$password = Request::input('password', '');
  		$email = Request::input('email', '');
  		$user = User::where("email", $email)->first();
  		
  		// Regarde si le User existe
  		if (!isset($user)) {
      		return 'Connexion échouée, utilisateur inexistant';
  		}
  		
  		// Vérifie le password et le hash
  		if (!Hash::check($password, $user->password)) {
      		return 'Connexion échouée, mauvais password';
  		}
  		
  		// Auth persistance,si user existant et bon mot de passe stock l’id du user dans session
  		Session::put('user_id', $user->id);
  		return 'Connexion réussie';
	}
	
	public function logout()
	{
    	Session::forget('user_id');
    	return 'Déconnexion réussie';
	}

}
