<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title', 'user_id', 'description', 'prep', 
        'cook', 'difficulty', 'serves', 'ingredients', 
        'preparation', 'image',
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function cookbookrecipes() {
        return $this->hasMany('App\RecipeInCookBook');
    }
    
    public function picture() {
        return $this->hasOne('App\Picture');
    }
    
    public function tryListUsers() {
        return $this->hasMany('App\WantToMakeList');
    }

    //added relationship for comments
    public function comments() {
        return $this->hasMany('App\Comment');
    }

}
