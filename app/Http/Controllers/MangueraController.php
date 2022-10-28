<?php

namespace App\Http\Controllers;

use App\Models\Manguera;
use Illuminate\Http\Request;

class MangueraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminUser');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Manguera::all();
        return view('admin.crud_mangueras.index',compact(['datos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud_mangueras.create');
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
            'manguera' => 'required',
            'descripcion' => 'required',
            'fitting1' => 'required',
            'fitting2' => 'required',
            'longitud' => 'required',
            'presion' => 'required',
            'proteccion' => 'required',
        ]);
        $Manguera = new Manguera;
        $Manguera->identificador = $request->identificador;
        $Manguera->manguera = $request->manguera;
        $Manguera->descripcion = $request->descripcion;
        $Manguera->fitting1 = $request->fitting1;
        $Manguera->fitting2 = $request->fitting2;
        $Manguera->longitud = $request->longitud;
        $Manguera->presion = $request->presion;
        $Manguera->proteccion = $request->proteccion;
        if($request->Extra != null ){
            $Manguera->Extra = $request->Extra;
        }else{
            $Manguera->Extra = 'pendiente';
        }
        $Manguera->save();
        return redirect()->route('mangueras.index')->with('success','Manguera Creada Satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manguera  $manguera
     * @return \Illuminate\Http\Response
     */
    public function show(Manguera $manguera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manguera  $manguera
     * @return \Illuminate\Http\Response
     */
    public function edit(Manguera $manguera)
    {
        return view('admin.crud_mangueras.edit', compact('manguera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manguera  $manguera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manguera $manguera)
    {
        $manguera->identificador = $request->identificador;
        $manguera->manguera = $request->manguera;
        $manguera->descripcion = $request->descripcion;
        $manguera->fitting1 = $request->fitting1;
        $manguera->fitting2 = $request->fitting2;
        $manguera->longitud = $request->longitud;
        $manguera->presion = $request->presion;
        $manguera->proteccion = $request->proteccion;
        if($request->Extra != null ){
            $manguera->Extra = $request->Extra;
        }else{
            $manguera->Extra = 'pendiente';
        }
        $manguera->save();
        return redirect()->route('mangueras.index')->with('success','Manguera Modificada Satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manguera  $manguera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manguera $manguera)
    {
        $manguera->delete();
        return redirect()->route('mangueras.index')->with('success','Los Datos De La Manguera Se Eliminaron Satisfactoriamente.');
    }
}
