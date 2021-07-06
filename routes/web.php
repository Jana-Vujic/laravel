<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PocetnaController;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\KupovinaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PocetnaController::class, 'kategorije']);
Route::get('/kategorije', [PocetnaController::class, 'kategorije']);
Route::get('/proizvodi', [PocetnaController::class, 'proizvodi']);

Route::get('/kategorija/{kategorija}', [KategorijaController::class, 'show']);
Route::get('/proizvod/{proizvod}', [ProizvodController::class, 'show']);

Route::prefix('api')->group(function () {
    Route::get('/kategorije/get', [KategorijaController::class, 'get']);

    Route::delete('/proizvodi/destroy/{proizvod_id}', [ProizvodController::class, 'destroy']);
    Route::get('/proizvodi/get', [ProizvodController::class, 'get']);

    Route::post('/kupovine/store', [KupovinaController::class, 'store']);
});
