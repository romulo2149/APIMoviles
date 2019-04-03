<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Lib\Direccion;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function verPedidos($estatus,$fecha)
    {
        if($fecha == "todos")
        {
            $pedidos = Pedido::where('entregado', '=', $estatus)->get();
        }
        else
        {
        $pedidos = Pedido::where([['fecha_entrega', '=', $fecha],['entregado', '=', $estatus]])->get();
        }
        foreach($pedidos as $p)
        {
            if($p->imagen_paquete)
            {
                $p->imagen_paquete = base64_encode($p->imagen_paquete);
            }
            if($p->id_frente)
            {
                $p->id_frente = base64_encode($p->id_frente);
            }
            if($p->id_atras)
            {
                $p->id_atras = base64_encode($p->id_atras);
            }
            if($p->firma)
            {
                $p->firma = base64_encode($p->firma);
            }
        }
        return response()->json(['pedidos' => $pedidos]);
    }

    public function editarPedido(Request $request)
    {
        $pedido = Pedido::find($request->id);
        $pedido->imagen_paquete = base64_decode($request->paquete);
        $pedido->firma = base64_decode($request->firma);
        $pedido->id_frente = base64_decode($request->frente);
        $pedido->id_atras = base64_decode($request->atras);
        $pedido->id_repartidor = $request->repartidor;
        $pedido->parentezco = $request->parentezco;
        $pedido->entregado = 'si';
        $pedido->save();
        return response()->json(
            [
                'mensaje' => 'Pedido entregado con éxito'
            ]
            );
    }

    public function rechazarPedido(Request $request)
    {
        $pedido = Pedido::find($request->id);
        $pedido->entregado = 'no';
        $pedido->save();
        return response()->json(
            [
                'mensaje' => 'Pedido rechazado'
            ]
            );
    }

    public function mostrarPedido($id)
    {
        $pedidos = Pedido::where('id', '=', $id)->get();

        foreach($pedidos as $p)
        {
            if($p->imagen_paquete)
            {
                $p->imagen_paquete = base64_encode($p->imagen_paquete);
            }
            if($p->id_frente)
            {
                $p->id_frente = base64_encode($p->id_frente);
            }
            if($p->id_atras)
            {
                $p->id_atras = base64_encode($p->id_atras);
            }
            if($p->firma)
            {
                $p->firma = base64_encode($p->firma);
            }
        }
        return response()->json($pedidos[0]);
    }
}
