<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	public $timestamps = false;
	
	public function categorieParent(){
		return $this->belongsTo('App\Models\Categorie');
	}
	
	public function categorieEnfant(){
		return $this->hasMany('App\Models\Categorie');
	}
	
	public function actualites(){
        return $this->belongsToMany('App\Models\Actualite', 'actualite_categorie')->withTimestamps();
	}
	
	public function quizzs(){
		return $this->belongsToMany('App\Models\Quizz');
	}
}

