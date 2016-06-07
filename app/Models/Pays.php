<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
	public $timestamps = false;
	
	public function regions(){
      return $this->hasMany('Region');
	}
	
}
