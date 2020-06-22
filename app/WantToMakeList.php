<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantToMakeList extends Model
{
    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id', 'recipe_id',
    ];
}
