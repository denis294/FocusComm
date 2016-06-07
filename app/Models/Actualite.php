<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
	public function actualiteParent{
		return $this->belongsTo('Actualite');
	}
	
	public function actualiteEnfant{
		return $this->hasMany('Actualite');
	}
	
	public function users{
      return $this->belongsTo('User');
	}
	
	public function categories{
        return $this->belongsToMany('Categorie', 'actualite_categorie')->withTimestamps();
	}
	
}