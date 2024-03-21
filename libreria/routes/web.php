<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AutoreController;
use App\Http\Controllers\BookController;



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

Route::resource("/book", BookController::class);
Route::resource("/autore", AutoreController::class);
