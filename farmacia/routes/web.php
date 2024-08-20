<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect()->route('clients.index');
});


// Rota para a página inicial
Route::get('/', [HomeController::class, 'index']);

// Rotas para os recursos
Route::resource('clients', ClientController::class);
Route::resource('products', ProductController::class);
Route::resource('sales', SaleController::class);

