<?php

namespace App\Models;

class Region extends Model
{
	public $timestamps = false;
	protected $fillable = array('nom', 'pays_id');
    protected static $rules = [
        'nom' => 'string',
        'pays_id' => 'required|integer|min:1',
    ];
	
	public function users(){
      return $this->belongsToMany('App\Models\User');
	}
	
	public function pays(){
      return $this->belongsTo('App\Models\Pays');
	}
	
}
