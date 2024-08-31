<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntregadorController;

// Rotas para CRUD de Produto
Route::resource('produtos', ProdutoController::class);

// Rotas para CRUD de Entregador
Route::resource('entregadores', EntregadorController::class);


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
*/