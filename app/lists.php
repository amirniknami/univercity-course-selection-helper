<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lists extends Model
{
    public function user(){
        return $this->belongsTo('App\users');
    }
}
