<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic extends Model
{
  public function medicines(){
    return $this->belongsToMany('App\medicines')->get();
}}
