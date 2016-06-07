<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
