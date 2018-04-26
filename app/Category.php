<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//one category has many posts -relationship
    public function posts()
    {
    	return $this->hasMany('App\Post');
    }
}
