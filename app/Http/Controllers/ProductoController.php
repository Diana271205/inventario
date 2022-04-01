<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function registerProducto(Request $request) {
        $request->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'iva' => 'required',    
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
        $producto = Producto::all();
        return $producto;
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
        $producto= new presentacion();
        $producto->descripcion = $request->descripcion;
        $producto->precio= $request->precio;
        $producto->stock = $request->stock;
        $producto->iva = $request->iva;
        $producto->save();

        return response()->json([
            "status" => 1,
            "msg" => "¡Registro de producto exitoso!",
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $producto=Producto::findOrFail($request->id);
        $producto->precio= $request->precio;
        $producto->stock = $request->stock;
        $producto->iva = $request->iva;
        $producto->save();

        return response()->json([
            "status" => 1,
            "msg" => "¡Actualizacion de producto exitosa!",
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        $producto=Producto::destroy($request->id);
        return $producto;
    }
}
