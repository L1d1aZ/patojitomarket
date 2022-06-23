<?php

namespace App\Http\Controllers;

use App\Models\tipo_identificacion;
use Illuminate\Http\Request;

class TipoIdentificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = tipo_identificacion::simplePaginate(2);
        return view('tipo_identificacion.index',compact('tipo_identificacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_identificacion.create');
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
            $subject = new tipo_identificacion();

            $subject->nombre = $request->nombre;
           
            $subject->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_identificacion  $tipo_identificacion
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_identificacion $tipo_identificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_identificacion  $tipo_identificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_identificacion $tipo_identificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo_identificacion  $tipo_identificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_identificacion $tipo_identificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_identificacion  $tipo_identificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_identificacion $tipo_identificacion)
    {
        //
    }
}
