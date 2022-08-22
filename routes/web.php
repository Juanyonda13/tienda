<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DetalleProductoController;
use App\Http\Controllers\ProvedorProductoController;
use App\Http\Controllers\CategoriaProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaProductoController;

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

Route::get('/home',[ProductoController::class,'verProductos'])->name('Home');
////registrar producto/////////////////////////////////////////////////////////////////////

//Registro ///
Route::get('/verRegisterProducto',[DetalleProductoController::class,'verDetalle'])->name('verRegisterProducto');
Route::post('/createProducto',[DetalleProductoController::class,'createProducto'])->name('createProducto');
/////Provedor
Route::get('verProvedor',[ProvedorProductoController::class,'verprovedor'])->name('verProvedor');
Route::post('createProvedor',[ProvedorProductoController::class,'createProvedor'])->name('createProvedor');
////Categoria
Route::get('verCategoria',[CategoriaProductoController::class,'verCategoria'])->name('verCategoria');
Route::post('createCategoria',[CategoriaProductoController::class,'createCategoria'])->name('createCategoria');
/////subirlo a la tienda
Route::get('verelectrodomestico',[ProductoController::class,'verelectrodomestico'])->name('verelectrodomestico');
Route::post('createelectrodomestico',[ProductoController::class,'createelectrodomestico'])->name('createelectrodomestico');

////Compra////////////////////////////////////////////////////////////////////////////////
Route::get('/venta/{id}',[VentaProductoController::class,'venta'])->name('venta/');
Route::post('/compra',[VentaProductoController::class,'compra'])->name('compra');

/////Recibo///////////////////////////////////////////////////////////////////////////////
Route::get('/recibo',[ClienteController::class,'recibo'])->name('recibo');



/////Auth///////////////////////////////////////////////////////////////////////////

///register////
Route::get('/register',[ClienteController::class,'create'])->name('register');
Route::post('/registerStore',[ClienteController::class,'registerStore'])->name('registerStore');
/////Login///
Route::get('/',[ClienteController::class,'login'])->name('login');
Route::post('/loginStore',[ClienteController::class,'loginStore'])->name('loginStore');
Route::DELETE('/logout',[ClienteController::class,'logout'])->name('logout');

