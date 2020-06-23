<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    
    // fields can be filled
    protected $fillable = ['message', 'user_id', 'recipe_id'];

    //added
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }


}
