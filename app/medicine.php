<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Diagnostic;

class medicine extends Model
{
    public function diagnostics()
    {
        return $this->belongsToMany('\App\Diagnostic', 'medicines_diagnostics', 'diagnostic_id',
            'medicine_id');
    }
}
