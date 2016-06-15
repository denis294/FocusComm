<?php

namespace App\Models;

class User extends Model
{
    protected $fillable = ['pseudo','email','motDePasse','dateNaissance','sexe','region_id'];
    protected static $rules = [
        'pseudo' => 'String|max:80|required',
        'email' => 'E-mail|required',
        'motDePasse' => 'String|min:6|required',
        'dateNaissance' => 'required',
        'sexe' => 'String|required|max:1',
        'region_id' => 'Integer|required',
    ];
	
    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'group_user')->withTimestamps();
    }
     
    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
    
    public function actualites()
    {
        return $this->hasMany('App\Models\Actualite');
    }
    
    public function quizzs()
    {
        return $this->hasMany('App\Models\Quizz');
    }
    
    public function pages()
    {
        return $this->hasMany('App\Models\Page');
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
    public function hasRole($role, $serapp){
        if ($serapp instanceof ServiceApplicatif){
            $serapp = $resrc->nom;
        }
        $groups = $this->groups();
        foreach ($groups as $group) {
            if($group->hasRole($role, $resrc)){
                return true;
            }
        }
        return false;
    }
}