<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContinenteController;
use App\Http\Controllers\FiumeController;

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
Route::resource("/fiumes", FiumeController::class);
Route::resource("/continentes", ContinenteController::class);
