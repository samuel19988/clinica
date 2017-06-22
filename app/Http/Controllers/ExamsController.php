<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
class ExamsController extends Controller
{
    public function showDiagnostics($id)
    {
        $exam = exam::find($id);
        $diagnostics = $exam->diagnostics();
        return View("exam")->with(compact("exam","diagnostics"));
    }
}
