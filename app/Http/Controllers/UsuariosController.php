<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function index()
    {
        $listado_usuarios = usuarios::all();
        return response()->json($listado_usuarios, 200);
    }
    public function store(Request $request)
    {
        $usuario = new usuarios();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->clave = $request->clave;
        $usuario->save();
        return response()->json($usuario, 201);
    }
    
    public function show(string $id)
    {
        $usuario = usuarios::find($id);
        return response()->json($usuario, 200);
    }

    public function login(Request $request)
    {
        $correo = $request->correo;
        $clave = $request->clave;

        $usuario = DB::table('usuarios')
            ->where('correo', $correo)
            ->where('clave', $clave)
            ->first();

        if ($usuario) {
            return response()->json(['sms' => 'Acceso Exitoso'], 200);
        } else {
            return response()->json(['sms' => 'Credenciales Erradas'], 401);
        }
        
    }
}
