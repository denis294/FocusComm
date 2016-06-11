<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Lib\Message;
use Request;
use Redirect;
use Session;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
	
	public function handle($request, Closure $next, $guard = null){
    	
    	// On récupère la variable de session ‘user_id’
      	$userId = Session::get('user_id');

		// Si la variable n’est pas set, alors l’accès est refusé
      	if (!isset($userId)) {
      		Message::error('user.notLogin');
          return redirect()->route('login');
        }
		
		// Sinon on laisse passer
      	return $next($request);
	}
}
