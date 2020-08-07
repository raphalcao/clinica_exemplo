<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function index(Request $request) {
        return view('clinica.index');
    }

    public function agendar()
    {
        return view('clinica.formulario');
    }
}
