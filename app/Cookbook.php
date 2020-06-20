<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cookbook extends Model
{
    protected $fillable = [
        'title', 'user_id', 'recipe_id', 'description',
    ];
    
    public function cookbookrecipes() {
        return $this->hasMany('App\CookBookRecipe');
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
