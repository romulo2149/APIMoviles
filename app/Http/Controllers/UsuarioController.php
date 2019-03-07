<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsuarios()
    {
        $usuario = Usuario::all();
        return response()->json($usuario);
    }

    public function agregarUsuarios(Request $request)
    {
        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'correo_electronico' => $request->correo,
            'password' => $request->pass,
            'estatus' => 'activa',
          ]);

        return response()->json($usuario);
    }

    public function loginUsuario(Request $request)
    {
        $usuario = Usuario::where([['correo_electronico', '=', $request->correo],
                                   ['password', '=', $request->pass]])
                                   ->get();
        if(!$usuario->isEmpty())
        {
            return response()->json(
                [
                    'id' => $usuario[0]->id,
                    'nombre' => $usuario[0]->nombre,
                    'foto' => base64_encode($usuario[0]->fotoPerfil),
                    'login' => true
                ]
            );
        }
        else
        {
            return response()->json(
                [
                    'login' => false
                ]
            );
        }
    }
    public function updateUsuario(Request $request)
    {
        $usuario = Usuario::find($request->id);
        $usuario->fotoPerfil = base64_decode($request->foto);
        $usuario->save();
        return response()->json(
            [
                'mensaje' => 'Foto actualizada con éxito'
            ]
            );

    }
}
