<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Roles;

class RolesController extends Controller
{
    public function index()
    {
        $Roles = Roles::all();
        return response()->json([
            "Message" => $Roles
        ], response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $Roles = new Roles();
        $Roles->ID_Rol = $request->ID_Rol;
        $Roles->Descripcion = $request->Descripcion;
        $Roles->save();
        return response()->json([
            'result' => $Roles
        ]);

    }
    public function update(Request $request, int $ID_Rol)
    {
        try {
            $Roles = Roles::where('ID_Rol', $ID_Rol)->first();
            if (!$Roles) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Roles->ID_Rol = $request->ID_Rol;
            $Roles->Descripcion = $request->Descripcion;
            $Roles->save();
            return response()->json(['data' => $Roles], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    public function destroy(int $ID_Rol)
    {
        try {
            $Roles = Roles::where('ID_Rol', $ID_Rol)->first();

            if (!$Roles) {
                return response()->json(['message' => 'Not found'], 404);
            }
            $Roles->delete();

            return response()->json(['message' => 'Deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
}
