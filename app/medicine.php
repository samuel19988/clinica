<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Diagnostic;

class medicine extends Model
{
    public function diagnostics()
    {
        return $this->hasMany('App\Diagnostic')->get();
    }
}
