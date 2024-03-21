<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdottoController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view("/", "home");

Route::resource("/prodotto" , ProdottoController::class);
Route::resource("/categoria" , CategoriaController::class);
