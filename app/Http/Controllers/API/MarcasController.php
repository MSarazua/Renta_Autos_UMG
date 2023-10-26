<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Marcas;

class MarcasController extends Controller
{
    public function index()
    {
        $Marcas = Marcas::all();
        return response()->json([
            "Message" => $Marcas
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $Marcas = new Marcas();
        $Marcas->ID_Marca = $request->ID_Marca;
        $Marcas->Marca = $request->Marca;
        $Marcas->save();
        return response()->json([
            'result' => $Marcas
        ]);

    }
    public function update(Request $request, int $ID_Marca)
    {
        try {
            $Marcas = Marcas::where('ID_Marca', $ID_Marca)->first();
            if (!$Marcas) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Marcas->ID_Marca = $request->ID_Marca;
            $Marcas->Marca = $request->Marca;
            $Marcas->save();
            return response()->json(['data' => $Marcas], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Marca)
    {
        try {
            $Marcas = Marcas::where('ID_Marca', $ID_Marca)->first();

            if (!$Marcas) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Marcas->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
