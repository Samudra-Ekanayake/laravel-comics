<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/layout', function () {

    return view('layout.layout');
})->name("layout"); */


/* Route::get('/header', function () {

    return view('sections.header');
})->name("header"); */


Route::get('/', function () {

    $data = [
        "titolo" => "proviamo ad esercitarci con laravel",
        "descrizione" => "sembra facile dai",
        "funziona" => "funziona tutto bene"
    ];
    return view('altro', $data);
})->name("altro");

Route::get('/fumetti', function () {

    $data = [
        "fumetti" => config("store")
    ];

    return view('main', $data);
})->name("main");
