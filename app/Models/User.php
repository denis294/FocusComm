<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	
    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'group_user')->withTimestamps();
    }
     
    public function region()
    {
        return $this->hasOne('App\Models\Region');
    }
    
    public function actualites()
    {
        return $this->hasMany('App\Models\Actualite');
    }
    
    public function quizzs()
    {
        return $this->belongsToMany('App\Models\Quizz', 'user_quizz')->withTimestamps();
    }
   
    public function badges()
    {
        return $this->belongsToMany('App\Models\Badge', 'badge_user')->withTimestamps();
    }
    
    public function reponses()
    {
        return $this
            ->belongsToMany('App\Models\Reponse')
            ->withPivot('user_donne_reponse', 'estJuste')
            ->withTimestamps();
    }
}
