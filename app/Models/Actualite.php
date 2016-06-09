<?php

namespace App\Models;

class Actualite extends Model
{
	protected $fillable = array('titre', 'texte', 'dateCreation', 'image', 'actualiteLiee_id', 'categorie_id');
    protected static $rules = [
        'titre' => 'min:5|max:50|sometimes|required',
        'dateCreation' => 'date|date_format:Y-m-d',
        'texte' => 'min:50|max:1000|sometimes|required',
        'image' => 'string',
        'actualiteLiee_id' => 'integer|min:1',
        'categorie_id' => 'required|integer|min:1',
    ];
    
	public function actualiteParent(){
		return $this->belongsTo('App\Models\Actualite');
	}
	
	public function actualiteEnfant(){
		return $this->hasMany('App\Models\Actualite');
	}
	
	public function users(){
      return $this->belongsTo('App\Models\User');
	}
	
	public function categories(){
        return $this->belongsToMany('App\Models\Categorie', 'actualite_categorie')->withTimestamps();
	}
	
}