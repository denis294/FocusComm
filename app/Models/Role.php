<?php

namespace App\Models;

class Role
{
	public $timestamps = false;
	
    const CREATE = "create";
    const UPDATE = "update";
    const READ = "read";
    const DELETE = "delete";
}
