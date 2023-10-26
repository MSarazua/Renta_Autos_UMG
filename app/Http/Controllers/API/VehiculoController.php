<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Vehiculo;

class VehiculoController extends Controller
{
    public function index()
    {
        $Vehiculo = Vehiculo::all();
        return response()->json([
            "Message" => $Vehiculo
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $Vehiculo = new Vehiculo();
        $Vehiculo->ID_Vehiculo = $request->ID_Vehiculo;
        $Vehiculo->Clase = $request->Clase;
        $Vehiculo->Transmision = $request->Transmision;
        $Vehiculo->Asientos = $request->Asientos;
        $Vehiculo->Motor = $request->Motor;
        $Vehiculo->Color = $request->Color;
        $Vehiculo->Entretenimiento = $request->Entretenimiento;
        $Vehiculo->AC = $request->AC;
        $Vehiculo->Marca = $request->Marca;
        $Vehiculo->Placa = $request->Placa;
        $Vehiculo->Ano = $request->Ano;
        $Vehiculo->Disponible = $request->Disponible;
        $Vehiculo->save();
        return response()->json([
            'result' => $Vehiculo
        ]);

    }
    public function update(Request $request, int $ID_Vehiculo)
    {
        try {
            $Vehiculo = Vehiculo::where('ID_Vehiculo', $ID_Vehiculo)->first();
            if (!$Vehiculo) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Vehiculo->ID_Vehiculo = $request->ID_Vehiculo;
            $Vehiculo->Clase = $request->Clase;
            $Vehiculo->Transmision = $request->Transmision;
            $Vehiculo->Asientos = $request->Asientos;
            $Vehiculo->Motor = $request->Motor;
            $Vehiculo->Color = $request->Color;
            $Vehiculo->Entretenimiento = $request->Entretenimiento;
            $Vehiculo->AC = $request->AC;
            $Vehiculo->Marca = $request->Marca;
            $Vehiculo->Placa = $request->Placa;
            $Vehiculo->Ano = $request->Ano;
            $Vehiculo->Disponible = $request->Disponible;

            $Vehiculo->save();
            return response()->json(['data' => $Vehiculo], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Vehiculo)
    {
        try {
            $Vehiculo = Vehiculo::where('ID_Vehiculo', $ID_Vehiculo)->first();

            if (!$Vehiculo) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Vehiculo->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
