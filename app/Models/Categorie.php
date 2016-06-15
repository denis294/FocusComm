<?php

namespace App\Models;

class Categorie extends Model
{
	protected $fillable = array('nom','icone','description','categorieParente_id');
    protected static $rules = [
        'nom' => 'min:3|max:50|sometimes|required',
        'icone' => 'string',
        'description' => 'string',
        'categorieParente_id' => 'integer|min:1',
    ];
    
	public $timestamps = false;
	
	public function categorieParent(){
		return $this->belongsTo('App\Models\Categorie','categorieParente_id');
	}
	
	public function categorieEnfant(){
		return $this->hasMany('App\Models\Categorie','categorieParente_id');
	}
	
	public function actualites(){
        return $this->belongsToMany('App\Models\Actualite', 'actualite_categorie')->withTimestamps();
	}
	
	public function quizzs(){
		return $this->hasMany('App\Models\Quizz');
	}
	
    public function pages()
    {
        return $this->hasMany('App\Models\Page');
    }
}

