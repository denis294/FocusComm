<?php

namespace App\Models;

class User extends Model
{
    protected $fillable = ['pseudo','email','motDePasse','age','sexe','region_id'];
    protected static $rules = [
        'pseudo' => 'String|max:80|required',
        'email' => 'E-mail|required',
        'motDePasse' => 'String|min:6|required',
        'age' => 'Integer|required',
        'sexe' => 'String|required|max:1',
        'region_id' => 'Integer|required',
    ];
	
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
        return $this->hasMany('App\Models\Quizz');
    }

    public function quizzsParticipations(){
        return $this->belongsToMany('App\Models\Quizz', 'user_quizz');
    }
   
    public function badges()
    {
        return $this->belongsToMany('App\Models\Badge', 'badge_user');
    }
    
    public function reponses()
    {
        return $this
            ->belongsToMany('App\Models\Reponse', 'user_donne_reponse')
            ->withPivot('estJuste');
    }
}
