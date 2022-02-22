<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
   protected $fillable=['orders_id','product_name','brand','quantity','budget','amount'];
}
