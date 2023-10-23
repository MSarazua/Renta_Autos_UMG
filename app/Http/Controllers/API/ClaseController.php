<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Clase;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::all();
        return response()->json([
            "Message" => $clases
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $clase = new Clase();
        $clase->ID_Clase = $request->ID_Clase;
        $clase->Descripcion = $request->Descripcion;
        $clase->save();
        return response()->json([
            'result' => $clase,
            response::HTTP_CREATED
        ]);

    }
    public function update(Request $request, int $ID_Clase)
    {
        try {
            $clase = Clase::where('ID_Clase', $ID_Clase)->first();
            if (!$clase) {
                return response()->json(['message' => 'Documento not found'], 404);
            }
            $clase->ID_Clase = $request->ID_Clase;
            $clase->Descripcion = $request->Descripcion;
            $clase->save();
            return response()->json(['data' => $clase], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Clase)
    {
        try {
            $clase = Clase::where('ID_Clase', $ID_Clase)->first();

            if (!$clase) {
                return response()->json(['message' => 'Documento not found'], 404);
            }
            $clase->delete();

            return response()->json(['message' => 'Documento deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

}
