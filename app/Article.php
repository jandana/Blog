<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="articles";
    protected $fillable=['title','content','category_id','user_id'];

    public function category(){
    	return $this->belongsto('App\Category');
    }

    public function user(){
    	return $this->belongsto('App\User');
    }

    public function images(){
    	return $this->hasMany('App\Image');
    }

    public function tags(){
    	return $this->belongstoMany('App\Tag');
    }

    public function scopeSearch($query, $title){
        return $query->where('title','LIKE',"%$title%");
    }
}
