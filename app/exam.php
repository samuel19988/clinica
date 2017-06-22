<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Diagnostic;
class exam extends Model
{
    public function diagnostics()
    {
        return $this->hasMany('App\Diagnostic')->get();
    }


}
