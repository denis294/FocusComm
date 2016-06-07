<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    public function question()
    {
        return $this->belongsTo('Question');
    }
    
    public function users()
    {
        return $this->belongsToMany('User');
    }
}
