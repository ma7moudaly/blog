<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
     use softDeletes;

     protected $dates=['deleted_at'];

    protected $fillable =[
        'title','content','featured','category_id','slug','user_id'
    ];

    //method to get path of image from DB
    public function getFeaturedAttribute($featured)
    {
       return asset($featured);
    }

	//many post has only one category -relationship
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    //many tags has many posts
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
