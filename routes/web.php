<?php

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
Route::get('/hitung',[App\Http\controllers\LatihanController::class,'penjumlahan']);
Route::get('/formhitung',[App\Http\Controllers\LatihanController::class,'formhitung']);
Route::post('/formhitung',[App\Http\Controllers\LatihanController::class,'formhitung_post']);
