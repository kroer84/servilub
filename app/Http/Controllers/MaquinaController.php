<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
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
        $datos = Maquina::orderBy('id')->paginate(10);
        return view('admin.crud_maquina.index',compact(['datos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud_maquina.create');
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
            'no_maq' => 'required',
            'des_maq' => 'required',
        ]);
        $Maquina = new Maquina;
        $Maquina->no_maq = $request->no_maq;
        $Maquina->des_maq = $request->des_maq;
        $Maquina->save();

        return redirect()->route('maquinas.index')->with('success','Maquina Creada Satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function show(Maquina $maquina)
    {
        return view('admin.crud_maquina.show', compact('maquina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function edit(Maquina $maquina)
    {
        return view('admin.crud_maquina.edit', compact('maquina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maquina $maquina)
    {
        $maquina->no_maq = $request->no_maq;
        $maquina->des_maq = $request->des_maq;
        $maquina->save();
        return redirect()->route('maquinas.index')->with('success','Los Datos De La MAquina Se Actualizaron Satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maquina $maquina)
    {
        $maquina->delete();
        return redirect()->route('maquinas.index')->with('success','Los Datos De La MAquina Se Eliminaron Satisfactoriamente.');
    }
}
