<?php

namespace App\Http\Controllers;
use \App\patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
       public function showExams($id){
$patient = patient::find($id);
//$exams = $patient->exams();
return $patient;
//return $exams;
}}
