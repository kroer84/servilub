<?php

namespace App\Http\Controllers;

use App\Models\Magueras_Maquinas;
use App\Models\Manguera;
use App\Models\Maquina;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class MaguerasMaquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Magueras_Maquinas::orderBy('id')->paginate(10);
        return view('admin.crud_mangueras_maquinas.index',compact(['datos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maquinas = Maquina::all();
        $mangueras = Manguera::all();

        return view('admin.crud_mangueras_maquinas.create')->with(compact('maquinas','mangueras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'identificador' => 'required',
            'instalacion' => 'required',
            'chequeo' => 'required',
            'cambio' => 'required',
            'estado_compra' => 'required',
            'nota' => 'required',
            'precio' => 'required',
            'maquina_id' => 'required',
            'manguera_id' => 'required',

        ]);
        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = $request->identificador;
        $instalacion->instalacion = $request->instalacion;
        $instalacion->chequeo = $request->chequeo;
        $instalacion->cambio = $request->cambio;
        $instalacion->estado_compra = $request->estado_compra;
        $instalacion->nota = $request->nota;
        $instalacion->precio = $request->precio;
        $instalacion->maquina_id = $request->maquina_id;
        $instalacion->manguera_id = $request->manguera_id;
        $instalacion->save();
        return redirect()->route('Instalacion.index')->with('success','Instalacion Creada Satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magueras_Maquinas  $magueras_Maquinas
     * @return \Illuminate\Http\Response
     */
    public function show(Magueras_Maquinas $magueras_Maquinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magueras_Maquinas  $magueras_Maquinas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Magueras_Maquinas::find($id);
        $maquinas = Maquina::all();
        $mangueras = Manguera::all();
        return view('admin.crud_mangueras_maquinas.edit')->with(compact('maquinas','mangueras','dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magueras_Maquinas  $magueras_Maquinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instalacion = Magueras_Maquinas::find($id);
        $instalacion->identificador = $request->identificador;
        $instalacion->instalacion = $request->instalacion;
        $instalacion->chequeo = $request->chequeo;
        $instalacion->cambio = $request->cambio;
        $instalacion->estado_compra = $request->estado_compra;
        $instalacion->nota = $request->nota;
        $instalacion->precio = $request->precio;
        $instalacion->maquina_id = $request->maquina_id;
        $instalacion->manguera_id = $request->manguera_id;
        $instalacion->save();
        return redirect()->route('Instalacion.index')->with('success','Instalacion Actualizada Satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magueras_Maquinas  $magueras_Maquinas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instalacion = Magueras_Maquinas::find($id);
        $instalacion->delete();
        return redirect()->route('Instalacion.index')->with('success','Los Datos De La Manguera Se Eliminaron Satisfactoriamente.');
    }
}
