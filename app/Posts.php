<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable=['post_title', 'categories_id', 'post_description', 'post_picture', 'year'];
    
    public function categories()
    {
    	return $this->belongsTo(Categories::class);
    }
     public function comments()
    {
        	return $this->hasMany('App\Comments');
    }
}
