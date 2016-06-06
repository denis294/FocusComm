<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceApplicatif extends Model
{
	public function groups{
      return $this->belongsToMany('Group');
	}
}
