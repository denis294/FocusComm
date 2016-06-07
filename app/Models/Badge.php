<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public function quizz()
    {
      return $this->belongsTo('Quizz');
    }
    
    public function users()
    {
        return $this->belongsToMany('User', 'badge_user')->withTimestamps();
    }
}
