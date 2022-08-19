<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DetalleProductoController;
use App\Http\Controllers\ProvedorProductoController;
use App\Http\Controllers\CategoriaProductoController;

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

Route::get('/',[ProductoController::class,'verProductos'])->name ('Home');
////registrar producto//////
//ver Registro ///
Route::get('/verRegisterProducto',[DetalleProductoController::class,'verDetalle'])->name('verRegisterProducto');
Route::post('/createProducto',[DetalleProductoController::class,'createProducto'])->name('createProducto');

Route::get('verProvedor',[ProvedorProductoController::class,'verprovedor'])->name('verProvedor');
Route::post('createProvedor',[ProvedorProductoController::class,'createProvedor'])->name('createProvedor');

Route::get('verCategoria',[CategoriaProductoController::class,'verCategoria'])->name('verCategoria');
Route::post('createCategoria',[CategoriaProductoController::class,'createCategoria'])->name('createCategoria');

Route::get('verelectrodomestico',[ProductoController::class,'verelectrodomestico'])->name('verelectrodomestico');
Route::post('createelectrodomestico',[ProductoController::class,'createelectrodomestico'])->name('createelectrodomestico');

