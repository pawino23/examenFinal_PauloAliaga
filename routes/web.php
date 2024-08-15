<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactoController::class, 'send'])->name('contacto.send');