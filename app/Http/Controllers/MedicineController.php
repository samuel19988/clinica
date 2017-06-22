<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Diagnostic;
use \App\medicine;

class MedicineController extends Controller
{
    public function showMedicine($id)
    {
        $Diagnostic = Diagnostic::find($id);

        $medicine = medicine::find($Diagnostic->id);

        return View("medicine")->with(compact("medicine","diagnostics"));
    }
}
