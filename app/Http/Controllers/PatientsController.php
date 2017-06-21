<?php

namespace App\Http\Controllers;

use \App\patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function showExams($id)
    {
        $patient = patient::find($id);
        $exams = $patient->exams();
        return View("patient")->with(compact("patient","exams"));
 $exams;
    }
}
