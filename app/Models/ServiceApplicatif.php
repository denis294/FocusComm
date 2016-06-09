<?php

namespace App\Models;

class ServiceApplicatif extends Model
{
	public $timestamps = false;
	protected $table = 'serviceapplicatifs';
	
    public function groups()
    {
        return $this
            ->belongsToMany('App\Models\Group', 'roles', 'serviceApplicatif_id', 'group_id')
            ->withPivot('nom');
    }
}
