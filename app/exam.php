<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{

  public function diagnostics(){
    return $this->hasMany('App\diagnostic')->get();
}}
