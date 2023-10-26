<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Reserva;

class ReservaController extends Controller
{
    public function index()
    {
        $Reserva = Reserva::all();
        return response()->json([
            "Message" => $Reserva
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $Reserva = new Reserva();
        $Reserva->ID_Reserva = $request->ID_Reserva;
        $Reserva->Descripcion = $request->Descripcion;
        $Reserva->save();
        return response()->json([
            'result' => $Reserva
        ]);

    }
    public function update(Request $request, int $ID_Reserva)
    {
        try {
            $Reserva = Reserva::where('ID_Reserva', $ID_Reserva)->first();
            if (!$Reserva) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Reserva->ID_Reserva = $request->ID_Reserva;
            $Reserva->Descripcion = $request->Descripcion;
            $Reserva->save();
            return response()->json(['data' => $Reserva], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Reserva)
    {
        try {
            $Reserva = Reserva::where('ID_Reserva', $ID_Reserva)->first();

            if (!$Reserva) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Reserva->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
