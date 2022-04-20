<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SemuaController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index']);

Route::get('/index', [TampilanController::class, 'index']);

Route::get('/jurnal', [JurnalController::class, 'index']);

Route::get('/izin', [IzinController::class, 'index']);

Route::get('/semua', [SemuaController::class, 'index']);

Route::get('/guru', [GuruController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);


