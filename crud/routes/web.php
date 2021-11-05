<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\enlaces;
use App\Http\Controllers\crud;

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

Route::get('home',[enlaces::class,'index'])->name('home');
Route::get('home/productos',[enlaces::class,'productos'])->name('productos');
Route::get('home/productos/mostrar',[crud::class,'mostrar'])->name('mostrar');
Route::post('home/productos/crear',[crud::class,'crearte'])->name('productos.crear');

