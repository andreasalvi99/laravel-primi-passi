<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $prodotto = "mouse";
    return view('home', compact("prodotto"));
});

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');
