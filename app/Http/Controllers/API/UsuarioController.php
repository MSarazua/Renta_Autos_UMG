<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Usuarios;

class UsuarioController extends Controller
{
    public function index()
    {
        $Usuarios = Usuarios::all();
        return response()->json([
            "Message" => $Usuarios
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $Usuarios = new Usuarios();
        $Usuarios->ID_Usuario = $request->ID_Usuario;
        $Usuarios->Username = $request->Username;
        $Usuarios->ID_Persona = $request->ID_Persona;
        $Usuarios->ID_Rol = $request->ID_Rol;
        $Usuarios->Contrasena = $request->Contrasena;
        $Usuarios->save();
        return response()->json([
            'result' => $Usuarios,
            response::HTTP_CREATED
        ]);

    }
    public function update(Request $request, int $ID_Usuario)
    {
        try {
            $Usuarios = Usuarios::where('ID_Usuario', $ID_Usuario)->first();
            if (!$Usuarios) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Usuarios->ID_Usuario = $request->ID_Usuario;
            $Usuarios->Username = $request->Username;
            $Usuarios->ID_Persona = $request->ID_Persona;
            $Usuarios->ID_Rol = $request->ID_Rol;
            $Usuarios->Contrasena = $request->Contrasena;
            $Usuarios->save();
            return response()->json(['data' => $Usuarios], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Usuario)
    {
        try {
            $Usuarios = Usuarios::where('ID_Usuario', $ID_Usuario)->first();

            if (!$Usuarios) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Usuarios->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
