<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeInCookBook extends Model
{
    protected $fillable = [
        'cookbook_id', 'recipe_id',
    ];
    
    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }
    
    public function cookbook() {
        return $this->belongsTo('App\Cookbook');
    }
}
