<?php

use App\Http\Controllers\ContratController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\PigisteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pigistes', PigisteController::class);
Route::resource('magazines', MagazineController::class);
Route::resource('contrats' ,ContratController::class);