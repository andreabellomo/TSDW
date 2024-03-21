<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CantanteController;
use App\Http\Controllers\CanzoneController;

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

Route::view('/', 'home');

Route::resource('/canzone', CanzoneController::class);
Route::resource('/cantante', CantanteController::class);


