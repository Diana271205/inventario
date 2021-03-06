<?php

namespace App\Http\Controllers;

use App\Models\venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{

    public function registerVenta(Request $request) {
        $request->validate([
            'cantidad' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'valor_venta' => 'required',     
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //trae todos los registros
        $venta = Venta::all();
        return $venta;
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
        $venta = new presentacion();
        $venta->cantidad = $request->cantidad;
        $venta->fecha = $request->fecha;
        $venta->hora = $request->hora;
        $venta->valor_venta = $request->valor_venta;
        $venta->save();

        return response()->json([
            "status" => 1,
            "msg" => "┬íRegistro de venta exitoso!",
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venta $venta)
    {
        $venta=Venta::findOrFail($request->id);
        $venta->cantidad = $request->cantidad;
        $venta->fecha = $request->fecha;
        $venta->hora = $request->hora;
        $venta->valor_venta = $request->valor_venta;
        $venta->save();

        return response()->json([
            "status" => 1,
            "msg" => "┬íActualizacion de venta exitosa!",
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {
        $venta=Venta::destroy($request->id);
        return $venta;
    }
}
