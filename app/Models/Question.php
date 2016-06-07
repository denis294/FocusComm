<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function quizz()
    {
       return $this->belongsTo('Quizz');
    }
    public function reponses()
    {
       return $this->hasMany('Reponse');
    }
}
