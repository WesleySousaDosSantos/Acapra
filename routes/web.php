<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/adocao', function () {
    return view('adocao');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});