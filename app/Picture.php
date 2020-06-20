<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'name', 'recipe_id', 
    ];
    
    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }
}
