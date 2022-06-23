<?php

namespace App\Http\Controllers;

use App\Models\perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $perfil = perfil::simplePaginate();
        return view('perfil.index',compact('perfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return View('perfil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $perfil= new Perfil();
        $perfil->admistrador=$request->administrador;
        $perfil->vendedor=$request->vendedor;
        $perfil->micro_emprendedor=$request->migro_emprendedor;
        $perfil->save();
        return 'agregado con exito';


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perfil $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfil $perfil)
    {
        //
    }
}
