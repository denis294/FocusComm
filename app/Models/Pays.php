<?php

namespace App\Models;

class Pays extends Model
{
	public $timestamps = false;
	
	public function regions(){
      return $this->hasMany('App\Models\Region');
	}
	
}
