<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Formulario;

class FormularioController extends Controller
{
    public function index()
    {
        $Formulario = Formulario::all();
        return response()->json([
            "Message" => $Formulario
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $Formulario = new Formulario();
        $Formulario->ID_Formulario = $request->ID_Formulario;
        $Formulario->ID_Reserva = $request->ID_Reserva;
        $Formulario->Scan = $request->Scan;
        $Formulario->Comentarios = $request->Comentarios;
        $Formulario->ID_Usuario = $request->ID_Usuario;
        $Formulario->save();
        return response()->json([
            'result' => $Formulario
        ]);

    }
    public function update(Request $request, int $ID_Formulario)
    {
        try {
            $Formulario = Formulario::where('ID_Formulario', $ID_Formulario)->first();
            if (!$Formulario) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Formulario->ID_Formulario = $request->ID_Formulario;
            $Formulario->ID_Reserva = $request->ID_Reserva;
            $Formulario->Scan = $request->Scan;
            $Formulario->Comentarios = $request->Comentarios;
            $Formulario->ID_Usuario = $request->ID_Usuario;
            $Formulario->save();
            return response()->json(['data' => $Formulario], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Formulario)
    {
        try {
            $Formulario = Formulario::where('ID_Formulario', $ID_Formulario)->first();

            if (!$Formulario) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Formulario->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
