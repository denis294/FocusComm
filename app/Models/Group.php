<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	public function users(){
        return $this->belongsToMany('User', 'group_user');
	}
	
    public function servicesapplicatifs()
    {
        return $this
            ->belongsToMany('ServiceApplicatif')
            ->withPivot('roles')
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
