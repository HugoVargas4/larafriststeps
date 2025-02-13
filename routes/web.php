<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



