<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_users extends Model
{
    public function role()
    {
    	return $this->belongsTo(Roles::class);
    }
}
