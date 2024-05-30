<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('base');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/prestation', function () {
    return view('prestation');
});

Route::get('/reservation', function () {
    return view('reservation');
});