<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Diagnostic;
class exam extends Model
{
    public function diagnostics()
    {
        return $this->belongsToMany('App\Diagnostic', 'exams_diagnostics', 'exam_id',
            'diagnostic_id');
    }
}
