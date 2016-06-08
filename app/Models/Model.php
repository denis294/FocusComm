<?php

namespace App\Models;

class Model extends \Illuminate\Database\Eloquent\Model
{
    protected static $rules = [];
    
    public static function validate($fields)
    {
        $validator = \Validator::make($fields, static::$rules);
        return $validator->passes();
    }

}
