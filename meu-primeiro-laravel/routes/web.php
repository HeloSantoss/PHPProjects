<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', function () {
    return view('produtos', [ProdutoController::class, 'index']);
});

Route::get('/contato', function () {
    return view('contato');
});

