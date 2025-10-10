<?php

use App\Http\Controllers\Admin\AnimaisController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\DuvidasController;
use App\Http\Controllers\Admin\FormulariosController;
use App\Http\Controllers\Admin\MensagensController;
use App\Http\Controllers\ControllerHome;
use Illuminate\Support\Facades\Route;


Route::get('/', [ControllerHome::class, 'index'])->name('index');
Route::get('/adocao', [ControllerHome::class, 'adocao'])->name('adocao');
Route::post('/mensagens/create', [MensagensController::class, 'create'])->name('mensagens.create');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/animais', [AnimaisController::class, 'index'])->name('animais');
    Route::get('/animais/criar', [AnimaisController::class, 'criar'])->name('animais.criar');
    Route::post('/animais/store', [AnimaisController::class, 'animaisstore'])->name('animais.store');
    Route::get('/animais/editar/{id}', [AnimaisController::class, 'animaisEditar'])->name('animais.editar');
    Route::post('/animais/update', [AnimaisController::class, 'update'])->name('animais.update');
    Route::delete('/animais/{id}', [AnimaisController::class, 'deleteAniamal'])->name('animais.deletar');
    Route::get('/formularios/adm', [FormulariosController::class, 'index'])->name('formularios');
    Route::get('/formularios/adm/{id}', [FormulariosController::class, 'show'])->name('formularios.show');
    Route::post('/formularios/adm/update/{id}', [FormulariosController::class, 'update'])->name('formularios.update');
    Route::get('/duvidas', [DuvidasController::class, 'index'])->name('duvidas');
    Route::get('/duvidas/criar', [DuvidasController::class, 'criar'])->name('duvidas.criar');
    Route::post('/duvidas/store', [DuvidasController::class, 'duvidasStore'])->name('duvidas.store');
    Route::get('/duvidas/editar/{id}', [DuvidasController::class, 'editar'])->name('duvidas.editar');
    Route::delete('/duvidas/{id}', [DuvidasController::class, 'delete'])->name('duvidas.delete');
    Route::post('/duvidas/update', [DuvidasController::class, 'update'])->name('duvidas.update');
    Route::get('/mensagens', [MensagensController::class, 'index'])->name('mensagens');
    Route::get('/mensagens/{id}', [MensagensController::class, 'show'])->name('mensagens.show');
    Route::delete('/mensagens/{id}', [MensagensController::class, 'delete'])->name('mensagens.delete');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/update', [AuthController::class, 'loginUpdate'])->name('login.update');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/passowrd/reset', [AuthController::class, 'reset'])->name('password.request');
Route::post('/password/email', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showNewPasswordForm'])->name('password.reset');
Route::post('/password/update', [AuthController::class, 'updatePassoword'])->name('password.update');

Route::get('/formulario', function () {
    return view('formulario');
});
