<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{

	public function users{
      return $this->belongsToMany('User');
	}
	
	public function badge{
      return $this->hasOne('Badge');
	}
	
	public function categorie{
      return $this->belongsTo('Categorie');
	}
	
	public function questions{
      return $this->hasMany('Question');
	}
}
