<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	public $timestamps = false;
	
	public function categorieParent(){
		return $this->belongsTo('Categorie');
	}
	
	public function categorieEnfant(){
		return $this->hasMany('Categorie');
	}
	
	public function actualites(){
        return $this->belongsToMany('Actualite', 'actualite_categorie')->withTimestamps();
	}
	
	public function quizzs(){
		return $this->belongsToMany('Quizz');
	}
}

