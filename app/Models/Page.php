<?php

namespace App\Models;

class Page extends Model
{
    protected $fillable = ['titre','contenu','categorie_id'];
    protected static $rules = [
        'titre' => 'string|required',
        'contenu' => 'string|required',
        'categorie_id' => 'integer|min:1',
    ];
	
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
     
    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }

}