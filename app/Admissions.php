<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admissions extends Model
{
    protected $fillable=['departments_id', 'student_id', 'student_name', 'student_section_name', 'student_picture'];
    
    public function departments()
    {
    	return $this->belongsTo(Departments::class);
    }
}
