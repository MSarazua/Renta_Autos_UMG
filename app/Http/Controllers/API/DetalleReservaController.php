<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\DetalleReserva;
use App\Reserva;
use App\Vehiculo;

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
        $Reserva = new Reserva();
        $Reserva->ID_Reserva = $request->ID_Reserva;
        $Reserva->Descripcion = $request->Descripcion;

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

        // // Obtén el vehículo si está disponible
        // $Vehiculo = Vehiculo::where('ID_Vehiculo', intval($request->ID_Vehiculo))->get();
        // if (!$Vehiculo) {
        //     return response()->json(['message' => 'Vehículo no encontrado o no disponible'], 404);
        // }
        // $Vehiculo->ID_Vehiculo = $Vehiculo->ID_Vehiculo;
        // $Vehiculo->Clase = $Vehiculo->Clase;
        // $Vehiculo->Transmision = $Vehiculo->Transmision;
        // $Vehiculo->Asientos = $Vehiculo->Asientos;
        // $Vehiculo->Motor = $Vehiculo->Motor;
        // $Vehiculo->Color = $Vehiculo->Color;
        // $Vehiculo->Entretenimiento = $Vehiculo->Entretenimiento;
        // $Vehiculo->AC = $Vehiculo->AC;
        // $Vehiculo->Marca = $Vehiculo->Marca;
        // $Vehiculo->Placa = $Vehiculo->Placa;
        // $Vehiculo->Ano = $Vehiculo->Ano;
        // $Vehiculo->Disponible = "No";

        // $Vehiculo->save();
        $DetalleReserva->save();
        $Reserva->save();

        return response()->json(['result' => $Reserva, 'resultDet' => $DetalleReserva], Response::HTTP_CREATED);
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
