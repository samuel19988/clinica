<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    public function exams(){
        return $this->belongsToMany('App\diagnostic')->get();
    }
}
