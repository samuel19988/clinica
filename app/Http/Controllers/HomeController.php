<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Patient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $patients = \App\Patient::orderBy('apellido','ASC')->paginate(20);
        return view('home')->with(compact('patients'));
    }
}