<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Diagnostic;
use \App\medicine;

class MedicineController extends Controller
{
    public function showmedicine($id)
    {
        $Diagnostic = Diagnostic::find($id);

        $medicines = medicine::join('medicines_diagnostics','medicines.id','=','medicines_diagnostics.medicine_id')->where('medicines_diagnostics.diagnostic_id',$Diagnostic->id)->get();



        return View("medicine")->with(compact("medicines","diagnostics"));
    }
}
