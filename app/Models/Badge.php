<?php

namespace App\Models;

class Badge extends Model
{
	public $timestamps = false;
	
    public function quizz()
    {
      return $this->belongsTo('App\Models\Quizz');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'badge_user')->withTimestamps();
    }
}
