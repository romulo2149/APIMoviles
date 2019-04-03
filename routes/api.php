<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/verUsuarios', 'UsuarioController@getUsuarios');

Route::post('/agregarUsuarios', 'UsuarioController@agregarUsuarios');

Route::post('/loginUsuario', 'UsuarioController@loginUsuario');

Route::put('/cambiarFoto', 'UsuarioController@updateUsuario');

Route::get('/verPedidos/{estatus}/{fecha}', 'PedidoController@verPedidos');

Route::get('/mostrarPedido/{id}', 'PedidoController@mostrarPedido');

Route::put('/editarPedido', 'PedidoController@editarPedido');

Route::put('/rechazarPedido', 'PedidoController@rechazarPedido');

Route::get('/direccion', 'MapaController@Mapa');

Route::get('/rutaMapa/{url}/{lat}/{lon}', 'MapaController@Ruta');

Route::get('/ruta2', 'MapaController@Ruta2');