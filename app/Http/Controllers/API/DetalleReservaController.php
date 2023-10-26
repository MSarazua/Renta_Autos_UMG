<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\DetalleReserva;

class DetalleReservaController extends Controller
{
    public function index()
    {
        $DetalleRserva = DetalleReserva::all();
        return response()->json([
            "Message" => $DetalleRserva
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $DetalleReserva = new DetalleReserva();
        $DetalleReserva->ID_DetalleReserva = $request->ID_DetalleReserva;
        $DetalleReserva->ID_Usuario = $request->ID_Usuario;
        $DetalleReserva->ID_Vehiculo = $request->ID_Vehiculo;
        $DetalleReserva->FechaSalida = $request->FechaSalida;
        $DetalleReserva->FechaEntrada = $request->FechaEntrada;
        $DetalleReserva->PrecioBase = $request->PrecioBase;
        $DetalleReserva->Descuento = $request->Descuento;
        $DetalleReserva->Adicionales = $request->Adicionales;
        $DetalleReserva->PrecioFinalCliente = $request->PrecioFinalCliente;
        $DetalleReserva->PrecioTotal = $request->PrecioTotal;
        $DetalleReserva->save();
        return response()->json([
            'result' => $DetalleReserva
        ]);

    }
    public function update(Request $request, int $ID_DetalleReserva)
    {
        try {
            $DetalleReserva = DetalleReserva::where('ID_DetalleReserva', $ID_DetalleReserva)->first();
            if (!$DetalleReserva) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $DetalleReserva->ID_DetalleReserva = $request->ID_DetalleReserva;
            $DetalleReserva->ID_Usuario = $request->ID_Usuario;
            $DetalleReserva->ID_Vehiculo = $request->ID_Vehiculo;
            $DetalleReserva->FechaSalida = $request->FechaSalida;
            $DetalleReserva->FechaEntrada = $request->FechaEntrada;
            $DetalleReserva->PrecioBase = $request->PrecioBase;
            $DetalleReserva->Descuento = $request->Descuento;
            $DetalleReserva->Adicionales = $request->Adicionales;
            $DetalleReserva->PrecioFinalCliente = $request->PrecioFinalCliente;
            $DetalleReserva->PrecioTotal = $request->PrecioTotal;
            $DetalleReserva->save();
            return response()->json(['data' => $DetalleReserva], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'] + $e, 500);
        }
    }

    public function destroy(int $ID_DetalleReserva)
    {
        try {
            $DetalleReserva = DetalleReserva::where('ID_DetalleReserva', $ID_DetalleReserva)->first();

            if (!$DetalleReserva) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $DetalleReserva->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
