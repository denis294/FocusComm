<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{

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
	
	public static function isValid($data = array())
    {
        return Validator::make($data, array(
            'id' => 'exists:actualites|sometimes|required',
        ))->passes();
    }
	
}