<?php

namespace App\Http\Controllers;
use \App\patient;
use Illuminate\Http\Request;

class PatientExamsController extends Controller
{
       public function showExams($id){
$patient = Patient::find($id);
$exams = $patient->exams();
return $exams;
}}
