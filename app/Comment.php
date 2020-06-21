<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    //added
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }


}
