<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/inicio', function () {
    return view('zoologico/inicio');
});

Route::get('/jorge', function () {
    return view('jorge');
});

Route::get('/molina', function () {
    return view('doicela/molina');
});

Route::get('/welcome', function () {
    return view('welcome');
});