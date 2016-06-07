<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{

    public function users()
    {
    	return $this->belongsToMany('App\Models\User', 'user_quizz')->withTimestamps();
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
}
