<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantToMakeList extends Model
{
    public function recipes() {
        return $this->hasMany('App\Recipe');
    }
    
    protected $fillable = [
        'user_id', 'recipe_id',
    ];
}
