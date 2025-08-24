<?php

use App\Http\Controllers\Admin\AnimaisController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\DuvidasController;
use App\Http\Controllers\Admin\FormulariosController;
use App\Http\Controllers\Admin\MensagensController;
use App\Http\Controllers\ControllerHome;
use Illuminate\Support\Facades\Route;


Route::get('/', [ControllerHome::class, 'index'])->name('index');

Route::get('/adocao', [ControllerHome::class, 'adocao'])->name('adocao');

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/animais', [AnimaisController::class, 'index'])->name('animais');
Route::get('/formularios', [FormulariosController::class, 'index'])->name('formularios');
Route::get('/duvidas', [DuvidasController::class, 'index'])->name('duvidas');
Route::get('/mensagens', [MensagensController::class, 'index'])->name('mensagens');