<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ArtistasController;



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

Route::get('/',[HomeController::class,'index'])->name('publico.index');
Route::get('/login',[HomeController::class,'login'])->name('publico.sesion');
Route::post('/login',[CuentasController::class,'login'])->name('cuenta.login');
Route::get('/register',[HomeController::class,'register'])->name('publico.register');
Route::post('/register',[ArtistasController::class,'register'])->name('artista.register');
Route::get('/logout',[CuentasController::class,'logout'])->name('cuentas.logout');


Route::get('/create',[ArtistasController::class,'create'])->name('artista.create');
Route::post('/store',[ArtistasController::class,'store'])->name('artista.store');
Route::get('/gestion',[ArtistasController::class,'gestion'])->name('artista.gestion');
Route::get('/delete/{imagen}',[ArtistasController::class,'delete'])->name('artista.delete');



Route::get('/update/{imagen}',[ArtistasController::class,'edit'])->name('artista.edit');
Route::put('/update/{imagen}',[ArtistasController::class,'update'])->name('artista.update');



