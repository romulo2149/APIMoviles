<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function verPedidos()
    {
        $pedido = Pedido::all();
        return response()->json($pedido);
    }

    public function editarPedido(Request $request)
    {
        $pedido = Pedido::find($request->id);
        $pedido->firma = base64_decode($request->firma);
        $pedido->id_frente = base64_decode($request->frente);
        $pedido->id_atras = base64_decode($request->atras);
        $pedido->id_repartidor = $request->repartidor;
        $pedido->entregado = 1;
        $pedido->save();
    }
}
