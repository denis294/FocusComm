<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceApplicatif extends Model
{
	public $timestamps = false;
	
    public function groups()
    {
        return $this
            ->belongsToMany('App\Models\Group')
            ->withPivot('roles')
            ->withTimestamps();
    }
}
