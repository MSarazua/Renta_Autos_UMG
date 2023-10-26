<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $detalleAutos = new Client();
        $response = $detalleAutos->request('GET', "http://localhost/renta_autosUmg/public/api/usuarios");
        $data = json_decode($response->getBody(), true);

        $autos = new Client();
        $response = $autos->request('GET', "http://localhost/renta_autosUmg/public/api/vehiculos");
        $dataV = json_decode($response->getBody());

        $marcas = new Client();
        $response = $marcas->request('GET', "http://localhost/renta_autosUmg/public/api/marca");
        $marcas = json_decode($response->getBody());

        if (isset($data['Message']) && is_array($data['Message'])) {
            for ($i = 0; $i < count($data['Message']); $i++) {
                if (($data['Message'][$i]['Username'] == $request->user) && ($data['Message'][$i]['Contrasena'] == $request->password)) {
                    $id_usuario = $data['Message'][$i]['ID_Usuario'];
                    return view('index.index', ['autos' => $dataV, 'marcas' => $marcas, 'id_usuario' => $id_usuario]);
                } else {
                    return view('auth.login')->with('error', 'Credenciales incorrectas');
                }
            }
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
