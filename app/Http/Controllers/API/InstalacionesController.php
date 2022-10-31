<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magueras_Maquinas;
use App\Models\Manguera;
use App\Models\Maquina;
use PhpParser\ErrorHandler\Collecting;

use function PHPSTORM_META\type;

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
        $identificador = Magueras_Maquinas::where('identificador', $id)->first();
        // dd($identificador);

        if($identificador == null){
            return response()->json([
                'res' => false,
                'mensaje' => 'Codigo no encontrado'
            ]);
        }else{
            $instalacion = Magueras_Maquinas::findOrfail($identificador->id);
            $maquina = Magueras_Maquinas::where('identificador', $id)->first()->maquina;
            $manguera = Magueras_Maquinas::where('identificador', $id)->first()->manguera;
            return response()->json([
                'res' => true,
                'mensaje' => 'Codigo Encontrado',
                'identificador' => $instalacion->identificador,
                'instalacion' => $instalacion->instalacion,
                'chequeo' => $instalacion->chequeo,
                'cambio' => $instalacion->cambio,
                'fechaCambio' => $instalacion->fechaCambio,
                'estado_compra' => $instalacion->estado_compra,
                'nota' => $instalacion->nota,
                'no_maq' => $maquina->no_maq,
                'des_maq' => $maquina->des_maq,
                'manguera' => $manguera->manguera,
                'descripcion' => $manguera->descripcionNGUERA,
                'fitting1' => $manguera->fitting1,
                'fitting2' => $manguera->fitting2,
                'longitud' => $manguera->longitud,
                'presion' => $manguera->presion,
                'proteccion' => $manguera->proteccion,
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
