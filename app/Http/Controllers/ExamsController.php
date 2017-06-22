<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Diagnostic;
use \App\Exam;

class ExamsController extends Controller
{
    public function showDiagnostics($id)
    {
        $exam = exam::find($id);
        $diagnostics = Diagnostic::find($exam->id);
        return View("exam")->with(compact("exam","diagnostics"));
    }
}
