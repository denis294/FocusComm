<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
	public function users{
      return $this->belongsTo('User');
	}
	
	public function categories{
      return $this->belongsTo('Categorie');
	}
	
}
