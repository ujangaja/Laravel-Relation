<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
	public function users()
	{
    	return $this->belongsToMany('App\Models\User');  
	
	}


	public function forums()
	{
    	return $this->hasManyThrough('App\Models\Forum','App\Models\User');  
	
	}

	public function likes()
	{
    	return $this->morphMany('App\Models\like','likeable');  
	
	}

	public function tags()
	{
    	return $this->morphToMany('App\Models\Tag','taggable');  
	
	}

}