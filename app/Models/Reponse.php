<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
	public $timestamps = false;
	
    public function question()
    {
        return $this->belongsTo('Question');
    }
    
    public function users()
    {
        return $this
            ->belongsToMany('User')
            ->withPivot('user_donne_reponse')
            ->withTimestamps();
    }
}