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
  		$pseudo = Request::input('pseudo', '');

  		// Si l'utilisateur renseigne son pseudo
  			
  			$user = User::where("pseudo", $pseudo)->first();
  			
  			// Vérifie que le pseudo existe dans la BD
  			if (!isset($user)) {
          $user = User::where("email", $pseudo)->first();
          if(!isset($user)){
  			   Message::error('user.missing');
           return redirect()->back()->withInput();
          }
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
	
	public function logout()
	{
    	Session::forget('user_id');
      Message::success('acces.deconnecte');
    	return redirect()->route('login');
	}
}
