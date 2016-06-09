<?php

namespace App\Models;

class Question extends Model
{
	public $timestamps = false;
	
    public function quizz()
    {
       return $this->belongsTo('App\Models\Quizz');
    }
    public function reponses()
    {
       return $this->hasMany('App\Models\Reponse');
    }
}
