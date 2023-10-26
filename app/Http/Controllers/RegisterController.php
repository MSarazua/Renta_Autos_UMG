<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_usuario = $request->ID_Persona;

        $autos = new Client();
        $response = $autos->request('GET', "http://localhost/renta_autosUmg/public/api/vehiculos");
        $dataV = json_decode($response->getBody());

        $marcas = new Client();
        $response = $marcas->request('GET', "http://localhost/renta_autosUmg/public/api/marca");
        $marcas = json_decode($response->getBody());

        $registerPerson = new Client();
        $response = $registerPerson->request('POST', "http://localhost/renta_autosUmg/public/api/persona", [
            'form_params' => [
                'ID_Persona' => $request->ID_Persona,
                'Nombre' => $request->Nombre,
                "Apellido" => $request->Apellido,
                "Numero" => $request->Numero,
                "Correo" => $request->Correo,
                "Documento" => $request->Documento
            ]
        ]);
        $decode = json_decode($response->getBody());
        $object = (object) $decode;

        $registerUser = new Client();
        $response = $registerUser->request('POST', "http://localhost/renta_autosUmg/public/api/usuarios", [
            'form_params' => [
                'ID_Usuario' => $request->ID_Persona,
                'ID_Persona' => $request->ID_Persona,
                'Username' => $request->Username,
                "Contrasena" => $request->Contrasena,
                "ID_Rol" => $request->ID_Rol,
                "Estado" => $request->Estado
            ]
        ]);
        $decode2 = json_decode($response->getBody());
        $object2 = (object) $decode2;

        return view('index.index', ['autos' => $dataV, 'marcas' => $marcas, 'id_usuario' => $id_usuario]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
