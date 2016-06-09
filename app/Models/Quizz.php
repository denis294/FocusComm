<?php

namespace App\Models;

class Quizz extends Model
{
	protected $fillable = array('titre', 'date', 'etat', 'badge_id', 'categorie_id');
    protected static $rules = [
        'titre' => 'min:5|max:100|sometimes|required',
        'date' => 'date|date_format:Y-m-d',
        'etat' => 'in:publie', 'cache', 'aValider',
        'badge_id' => 'integer|min:1',
        'categorie_id' => 'required|integer|min:1',
        
    ];
    
    public function users()
    {
    	return $this->belongsTo('App\Models\User');
    }
	
	public function badge(){
    	return $this->hasOne('App\Models\Badge');
	}
	
	public function categorie(){
    	return $this->belongsTo('App\Models\Categorie');
	}
	
	public function questions(){
    	return $this->hasMany('App\Models\Question');
	}

	public function usersParticipations(){
        return $this->belongsToMany('App\Models\User', 'user_quizz');
    }

}
