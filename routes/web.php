<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');
