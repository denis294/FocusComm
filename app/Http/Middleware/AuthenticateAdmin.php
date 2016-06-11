<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Session;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // On récupère la variable de session ‘user_id’
        $userId = Session::get('user_id');

        // On récupère la variable de session 'group'
        $group = Session::get('group');

        // Si la variable n’est pas set, alors l’accès est refusé
        if (!isset($userId)) {
            return response('Non autorisé', 403);
        }
        if(!isset($group)){
            return response('Non autorisé', 403);
        }
        
        return $next($request);
    }
}
