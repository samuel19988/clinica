<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic extends Model
{
    public function diagnostic(){
        return $this->belongsToMany('App\diagnostic')->get();
    }
}
