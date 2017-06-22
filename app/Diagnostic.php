<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\exam;

class Diagnostic extends Model
{
    public function Diagnostic()
    {
        return $this->belongsToMany('App\exam', 'exams_diagnostics', 'exam_id',
            'diagnostic_id');
    }
}
