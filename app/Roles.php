<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function role()
    {
    	return $this->hasOne(Roles_users::class);
    }
}
