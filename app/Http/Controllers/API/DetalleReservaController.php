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
    // public function store(Request $request)
    // {
    //     $DetalleReserva = new DetalleReserva();
    //     $DetalleReserva->ID_DetalleReserva = $request->ID_DetalleReserva;
    //     $DetalleReserva->ID_Usuario = $request->ID_Usuario;
    //     $DetalleReserva->ID_Vehiculo = $request->ID_VID_Vehiculoehiculo;
    //     $DetalleReserva->FechaSalida = $request->ID_FechaSalida;
    //     $DetalleReserva->FechaEntrada = $request->ID_Entrada;
    //     $DetalleReserva->PrecioBase = $request->ID_PrecioBase;
    //     $DetalleReserva->Descuento = $request->ID_Descuento;
    //     $DetalleReserva->Adicionales = $request->ID_Adicionales;
    //     $DetalleReserva->recioFinalCliente = $request - $request->PrecioFinalCliente;
    //     $DetalleReserva->PrecioTotal = $request - $request->PrecioTotal;
    //     $DetalleReserva->save();
    //     return response()->json([
    //         'result' => $DetalleReserva,
    //         response::HTTP_CREATED
    //     ]);

    // }
    public function store(Request $request)
    {
        $detalleReserva = new DetalleReserva();
        $detalleReserva->ID_DetalleReserva = $request->input('ID_DetalleReserva');
        $detalleReserva->ID_Usuario = $request->input('ID_Usuario');
        $detalleReserva->ID_Vehiculo = $request->input('ID_Vehiculo');
        $detalleReserva->FechaSalida = $request->input('FechaSalida');
        $detalleReserva->FechaEntrada = $request->input('FechaEntrada');
        $detalleReserva->PrecioBase = $request->input('PrecioBase');
        $detalleReserva->Descuento = $request->input('Descuento');
        $detalleReserva->Adicionales = $request->input('Adicionales');
        $detalleReserva->PrecioFinalCliente = $request->input('PrecioFinalCliente');
        $detalleReserva->PrecioTotal = $request->input('PrecioTotal');
        $detalleReserva->save();

        return response()->json([
            'result' => $detalleReserva,
        ], Response::HTTP_CREATED);
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
            $DetalleReserva->ID_Vehiculo = $request->ID_VID_Vehiculoehiculo;
            $DetalleReserva->FechaSalida = $request->ID_FechaSalida;
            $DetalleReserva->FechaEntrada = $request->ID_Entrada;
            $DetalleReserva->PrecioBase = $request->ID_PrecioBase;
            $DetalleReserva->Descuento = $request->ID_Descuento;
            $DetalleReserva->Adicionales = $request->ID_Adicionales;
            $DetalleReserva->recioFinalCliente = $request - $request->PrecioFinalCliente;
            $DetalleReserva->PrecioTotal = $request - $request->PrecioTotal;
            $DetalleReserva->save();
            return response()->json(['data' => $DetalleReserva], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
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
