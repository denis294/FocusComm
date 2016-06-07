<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	public $timestamps = false;
	
    public function quizz()
    {
       return $this->belongsTo('Quizz');
    }
    public function reponses()
    {
       return $this->hasMany('Reponse');
    }
}
