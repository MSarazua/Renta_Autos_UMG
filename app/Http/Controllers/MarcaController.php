<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', ['marcas' => $marcas]);
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
        request()->validate([
            'nombre' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $marcas = new Marca();
            $marcas->nombre = $request->nombre;
            $marcas->estado = $request->estado;
            $marcas->save();
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            abort(500, $e->errorInfo[2]);
            return response()->json($response, 500);
        }
        DB::commit();
        return redirect()->action(
            'MarcaController@index'
        )->with(['message' => 'Marca registrada', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $marcas = Marca::findOrFail($id);
            $marcas->estado = 0;
            $marcas->save();
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            abort(500, $e->errorInfo[2]);
            return response()->json($response, 500);
        }
        DB::commit();
        return redirect()->action(
            'MarcaController@index'
        )->with(['message' => 'Estado modificado', 'alert' => 'success']);
    }

    public function updateInactive(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $marcas = Marca::findOrFail($id);
            $marcas->estado = 1;
            $marcas->save();
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            abort(500, $e->errorInfo[2]);
            return response()->json($response, 500);
        }
        DB::commit();
        return redirect()->action(
            'MarcaController@index'
        )->with(['message' => 'Estado modificado', 'alert' => 'success']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //
    }
}
