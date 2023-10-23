<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $Persona = Persona::all();
        return response()->json([
            "Message" => $Persona
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $Persona = new Persona();
        $Persona->ID_Marca = $request->ID_Marca;
        $Persona->Descripcion = $request->Descripcion;
        $Persona->ID_Persona = $request->ID_Persona;
        $Persona->ID_Usuario = $request->ID_Usuario;
        $Persona->Nombre = $request->Nombre;
        $Persona->Apellido = $request->Apellido;
        $Persona->Numero = $request->Numero;
        $Persona->Correo = $request->Correo;
        $Persona->Documento = $request->Documento;
        $Persona->save();
        return response()->json([
            'result' => $Persona,
            response::HTTP_CREATED
        ]);

    }
    public function update(Request $request, int $ID_Persona)
    {
        try {
            $Persona = Persona::where('ID_Persona', $ID_Persona)->first();
            if (!$Persona) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Persona->ID_Marca = $request->ID_Marca;
            $Persona->Descripcion = $request->Descripcion;
            $Persona->ID_Persona = $request->ID_Persona;
            $Persona->ID_Usuario = $request->ID_Usuario;
            $Persona->Nombre = $request->Nombre;
            $Persona->Apellido = $request->Apellido;
            $Persona->Numero = $request->Numero;
            $Persona->Correo = $request->Correo;
            $Persona->Documento = $request->Documento;
            $Persona->save();
            return response()->json(['data' => $Persona], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Persona)
    {
        try {
            $Persona = Persona::where('ID_Persona', $ID_Persona)->first();

            if (!$Persona) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Persona->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
