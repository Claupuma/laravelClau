<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function fnIndex () {
        return view('welcome');
    }

    public function fnDetalle ($id) {
        $xAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle' , compact('xDetAlumnos'));
    }

    public function fnLista () {
        $xAlumnos = Estudiante::all();
        return view('pagLista' , compact('xAlumnos'));
    }
    public function fnGaleria ($numero=0) {
        $valor = $numero;
        $otro  = 25;

        return view('pagGaleria', compact('valor', 'otro'));
    }
    //
}