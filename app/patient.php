<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\exam;

class patient extends Model
{
    public function exams(){
        return $this->hasMany('App\exam')->get();
    }
}
