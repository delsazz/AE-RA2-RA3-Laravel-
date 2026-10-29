<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroControllerSDSC;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroControllerSDSC::class, 'index']);