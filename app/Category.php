<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=['name'];

    //relacion de uno a muchos con los articulos
    public function articles(){
    	return $this->hasMany('App\Article');
    }
}
