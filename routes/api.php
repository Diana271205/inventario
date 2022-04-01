<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register',[userController::class, 'register']);
Route::post('login', [UserController::class,'login']);
Route::group(['middleware' => ["autch::sanctum"]], function(){
    //rutas
    Route::get('userprofile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});

//Rutas proveedor
Route::post('/proveedor', [ProveedorController::class, 'registerProveedor']);
Route::get('/proveedor', [ProveedorController::class, 'index']);
Route::put('/proveedor', [ProveedorController::class, 'update']);
Route::delete('/proveedor', [ProveedorController::class, 'destroy']);
//Route::resourse('proveedor', [ProveedorController::class]);

//Rutas Presentacion

Route::post('/pesentacion', [PresentacionController::class, 'registerPresentacion']);
Route::get('/pesentacion', [PresentacionController::class, 'index']);
Route::put('/pesentacion', [PresentacionController::class, 'update']);
Route::delete('/pesentacion', [PresentacionController::class, 'destroy']);

//Rutas marca
Route::post('/marca',[MarcaController::class,'registerMarca']);
Route::get('/marca',[MarcaController::class,'index']);
Route::put('/marca',[MarcaController::class,'update']);
Route::delete('/marca',[MarcaController::class,'destroy']);

//Rutas producto
Route::post('/Producto',[ProductoController::class,'registerProducto']);
Route::get('/Producto',[ProductoController::class,'index']);
Route::put('/Producto',[ProductoController::class,'update']);
Route::delete('/Producto',[ProductoController::class,'destroy']);

//Rutas compra
Route::post('/compra',[CompraController::class,'registerCompra']);
Route::get('/compra',[CompraController::class,'index']);
Route::put('/compra',[CompraController::class,'update']);
Route::delete('/compra',[CompraController::class,'destroy']);

//Rutas Cliente
Route::post('/cliente',[ClienteController::class,'registerCliente']);
Route::get('/cliente',[ClienteController::class,'index']);
Route::put('/cliente',[ClienteController::class,'update']);
Route::delete('/cliente',[ClienteController::class,'destroy']);

//Rutas venta

Route::post('/venta',[VentaController::class,'registerVenta']);
Route::get('/venta',[VentaController::class,'index']);
Route::put('/venta',[VentaController::class,'update']);
Route::delete('/venta',[VentaController::class,'destroy']);



