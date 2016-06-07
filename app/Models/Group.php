<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	public $timestamps = false;
	
	public function users(){
        return $this->belongsToMany('App\Models\User', 'group_user');
	}
	
    public function servicesapplicatifs()
    {
        return $this
            ->belongsToMany('App\Models\ServiceApplicatif')
            ->withPivot('roles', 'nom')
            ->withTimestamps();
    }
    public function hasRole($role, $resrc)
    {
        if ($resrc instanceof ServiceApplicatif) {
            $resrc = $resrc->name;
        }
        $ressources = $this->ressources->where('nom', $resrc);
        foreach ($ressources as $ressource) {
            if ($ressource->pivot->roles== $role) {
                return true;
            }
        }
        return false;
    }
}
