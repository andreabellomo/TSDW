<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DipendenteController;
use App\Http\Controllers\AziendaController;
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

Route::view('/', "home");
Route::resource("/dipendente", DipendenteController::class);
Route::resource("/azienda", AziendaController::class);
