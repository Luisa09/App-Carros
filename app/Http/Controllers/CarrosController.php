<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carro::all();

        return view('Carro.index', ['carros' => $carros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Carro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $carro = new Carro();
            $carro->nombre_carro = $request->nombre_carro;
            $carro->planta_produccion = $request->planta_producion;
            $carro->fecha_ensamblaje = Carbon::parse($request->fecha_ensamblaje);
            $carro->modelo = $request->modelo;
            $carro->ciudad = $request->ciudad;
            $carro->fecha_ingreso = Carbon::now();

            $carro->save();

            return view('layouts.message', ['mensaje' => 'Carro creado exitósamente']);

        } catch(\Exception $ex) {

            dd($ex);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carro = Carro::find($id);

        if (empty($carro)) {

            return view('layouts.message', ['mensaje' => "No existe carro con id: '$id'"]);

        }

        return view('Carro.edit', ['carro' => $carro]);
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

        try {

            $carro = Carro::find($id);

            if (empty($carro)) {

                return view('layouts.message', ['mensaje' => "No existe carro con id: '$id'"]);

            }

            $carro->fecha_ensamblaje = Carbon::parse($request->fecha_ensamblaje);
            $carro->modelo = $request->modelo;

            $carro->save();

            return view('layouts.message', ['mensaje' => "Carro actualizado con éxito"]);


        } catch(\Exception $ex) {

            dd($ex);

        }
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
