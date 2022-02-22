<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
     protected $fillable=['customer_name','customer_address'];
     public function items()
     {
     	return $this->hasMany(Items::class);
     }
}
