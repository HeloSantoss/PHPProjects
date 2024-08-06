
<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('produtos', ProdutoController::class);

