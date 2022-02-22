<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable=['student_name', 'student_id', 'departments_id','student_address','student_email','student_mobile'];
    public function departments()
    {
    	return $this->belongsTo(Departments::class);
    }
}
