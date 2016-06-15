<?php

namespace App\Models;

class Group extends Model
{
	public $timestamps = false;
	
	public function users(){
        return $this->belongsToMany('App\Models\User', 'group_user')->withTimestamps();
	}
	
    public function servicesapplicatifs()
    {
        return $this
            ->belongsToMany('App\Models\ServiceApplicatif', 'roles', 'group_id', 'serviceApplicatif_id')
            ->withPivot('nom');
    }
    public function hasRole($role, $serapp)
    {
        if ($serapp instanceof ServiceApplicatif) {
            $serapp = $serapp;
        }
        $servicesapplicatifs = $this->servicesapplicatifs->where('nom', $serapp);
        foreach ($servicesapplicatifs as $serviceapplicatif) {
            if ($serviceapplicatif->pivot->nom === $role) {
                return true;
            }
        }
        return false;
    }
}
