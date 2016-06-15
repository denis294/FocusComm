<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Session;
use App\Models\User;
use App\Lib\Message;

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
        if(!Session::has('user_id')){
            Message::error('acces.notLogin');
            return redirect()->route('login');
        }

        $userId = Session::get('user_id');

        $user = User::find($userId);
        $groups = $user->groups;
        foreach ($groups as $group) {
            if($group->nom === 'admin'){
                return $next($request);
            }
        }
        return redirect()->route('accesInterdit');

    }
}
