<?php

namespace App\Models;

class Region extends Model
{
	public $timestamps = false;
	
	public function users(){
      return $this->hasMany('App\Models\User');
	}
	
	public function pays(){
      return $this->belongsTo('App\Models\Pays');
	}
	
}
