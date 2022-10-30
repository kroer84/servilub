<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magueras_Maquinas;
use App\Models\Manguera;
use App\Models\Maquina;
use PhpParser\ErrorHandler\Collecting;


class InstalacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Magueras_Maquinas::all();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instalacion = Magueras_Maquinas::where('identificador', $id)->select(['identificador', 'instalacion','fechaCambio','nota'])->get();

        if($instalacion->isEmpty()){
            return response()->json([
                'res' => false,
                'error' => 'Codigo no encontrado'
            ]);
        }else{
            $maquina = Magueras_Maquinas::where('identificador', $id)->first()->maquina;
            $manguera = Magueras_Maquinas::where('identificador', $id)->first()->manguera;
            return response()->json([
                'res' => true,
                'instalacion' => $instalacion,
                'maquina' => $maquina,
                'manguera' => $manguera
            ]);
        }

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
        //
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
