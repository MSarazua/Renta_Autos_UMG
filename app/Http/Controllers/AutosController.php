<?php

namespace App\Http\Controllers;

use App\Autos;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = new Client();
        $response = $autos->request('GET', "http://localhost/renta_autosUmg/public/api/vehiculos");
        $data = json_decode($response->getBody());

        $marcas = new Client();
        $response = $marcas->request('GET', "http://localhost/renta_autosUmg/public/api/marca");
        $marcas = json_decode($response->getBody());

        return view('index.index', ['autos' => $data, 'marcas' => $marcas]);
    }

    public function detalleVehiculo($id, $id_usuario) {
        $detalleAutos = new Client();
        $response = $detalleAutos->request('GET', "http://localhost/renta_autosUmg/public/api/vehiculos");
        $data = json_decode($response->getBody());

        $marcas = new Client();
        $response = $marcas->request('GET', "http://localhost/renta_autosUmg/public/api/marca");
        $marcas = json_decode($response->getBody());

        return view('index.detalleVehiculo', ['detalleAutos' => $data, 'idVehiculo' => $id, 'marcas' => $marcas, 'id_usuario' => $id_usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function show(Autos $autos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function edit(Autos $autos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autos $autos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autos $autos)
    {
        //
    }
}
