<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cookbook extends Model
{
    protected $fillable = [
        'title', 'user_id', 'description',
    ];
    
    public function cookbookrecipes() {
        return $this->hasMany('App\RecipeInCookBook');
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
