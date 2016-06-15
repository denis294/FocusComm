<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;
use Session;
use App\Lib\Message;

class AccesController extends Controller
{
    public function admin(){
    	if(Session::has('user_id')){
    		$user_id = Session::get('user_id');
    		$user = User::find($user_id);
    		$groups = $user->groups;
    		foreach ($groups as $group) {
    			if($group->nom === 'admin'){
    				return view('admin/accueil');
    			}
    		}
    		return redirect()->route('accesInterdit');
    	}
    	else{
    		Message::error('acces.restricted');
    		return redirect()->route('login');
    	}
    }

    public function partner(){
    	if(Session::has('user_id')){
    		$user_id = Session::get('user_id');
    		$user = User::find($user_id);
    		$groups = $user->groups;
    		foreach ($groups as $group) {
    			if($group->nom === 'participant'){
    				return view('partner/index');
    			}
    		}
    		return redirect()->route('accesInterdit');
    	}
    	else{
    		Message::error('acces.restricted');
    		return redirect()->route('login');
    	}
    }
}
