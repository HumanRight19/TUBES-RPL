<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlesirController;
use App\Http\Controllers\RegistrasiController;

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
Route::get('/', [PlesirController::class,'index']);

Route::get('/login', [PlesirController::class, 'loginPage']);

Route::get('/register', [RegistrasiController::class, 'registerPage']);

Route::post('/register', [RegistrasiController::class, 'store']);

Route::get('/destinasi', [PlesirController::class, 'destinasiPage']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
