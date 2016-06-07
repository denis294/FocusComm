<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	
    public function groups()
    {
        return $this->belongsToMany('Group');
    }
     
    public function region()
    {
        return $this->hasOne('Region');
    }
    
    public function actualites()
    {
        return $this->hasMany('Actualite');
    }
    
    public function quizzs()
    {
        return $this->belongsToMany('Quizz', 'user_quizz')->withTimestamps();
    }
   
    public function badges()
    {
        return $this->belongsToMany('Badge');
    }
    
    public function reponses()
    {
        return $this->belongsToMany('Reponse');
    }
}
