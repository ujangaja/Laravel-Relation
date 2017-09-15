<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   

    public function forums()
	{
    	return $this->hasManyTrough('App\Models\forum','App\Models\User');  
	
	}
}