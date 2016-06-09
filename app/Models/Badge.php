<?php

namespace App\Models;

class Badge extends Model
{

	public $timestamps = false;
	protected $fillable = array('titre', 'image');
    protected static $rules = [
        'titre' => 'min:5|max:100|sometimes|required',
        'image' => 'string',    
    ];
	
    public function quizz()
    {
      return $this->belongsTo('App\Models\Quizz');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'badge_user')->withTimestamps();
    }
    
}
