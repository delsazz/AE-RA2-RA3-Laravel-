<?php

namespace App\Http\Controllers;

use App\Models\LibroSDSC;

class LibroControllerSDSC extends Controller
{
    public function index()
    {
        $libros = LibroSDSC::all();
        return view('libros.index', compact('libros'));
    }
}