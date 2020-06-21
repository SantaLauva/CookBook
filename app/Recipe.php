<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title', 'user_id', 'description', 'prep', 
        'cook', 'difficulty', 'serves', 'ingredients', 
        'preparation',
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function cookbookrecipes() {
        return $this->hasMany('App\CookBookRecipe');
    }
    
    public function picture() {
        return $this->hasOne('App\Picture');
    }

    //added
    public function comments() {
        return $this->hasMany('App\Comment');
    }

}
