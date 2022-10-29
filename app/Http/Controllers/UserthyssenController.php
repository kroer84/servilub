<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use App\Models\Magueras_Maquinas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserthyssenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = Maquina::orderBy('id')->paginate(10);
        return view('user.user_maquina.index',compact(['datos']));
    }

    public function show(Maquina $maquina)
    {
        return view('user.user_maquina.show', compact('maquina'));
    }

    public function fechas()
    {
        return view('user.reportes.reporte_fechas');
    }
    public function guardar(Request $request)
    {
        $fechaInit = $request->get('FechaInit');
        $fechaFin = $request->get('FechaFin');
        $datos = Magueras_Maquinas::all()->where('fechaCambio', '>=', $request->get('FechaInit'))->where('fechaCambio', '<=', $request->get('FechaFin'));

        return view('user.reportes.show', compact('datos','fechaInit','fechaFin'));
    }

    public function mensual()
    {
        $dias = Carbon::now()->isoFormat('D');
        $fechaInit = Carbon::now()->subDay($dias-1)->isoFormat('D-M-Y');
        $fechaFin = Carbon::parse($fechaInit)->addMonth(1)->isoFormat('D-M-Y');
        // $datos = Magueras_Maquinas::whereIn('estado_compra', ['Cambio','Almacen'])->orderBy('identificador','DESC')->get();
        $datos = Magueras_Maquinas::all()->where('fechaCambio', '!=',  null)->where('fechaCambio', '<',  Carbon::parse($fechaInit)->addMonth(1));

        return view('user.reportes.show', compact('datos','fechaInit','fechaFin'));
    }

    public function bimestral()
    {
        $dias = Carbon::now()->isoFormat('D');
        $fechaInit = Carbon::now()->subDay($dias-1)->isoFormat('D-M-Y');
        $fechaFin = Carbon::parse($fechaInit)->addMonth(2)->isoFormat('D-M-Y');;
        $datos = Magueras_Maquinas::all()->where('fechaCambio', '!=',  null)->where('fechaCambio', '<',  Carbon::parse($fechaInit)->addMonth(2));

        return view('user.reportes.show', compact('datos','fechaInit','fechaFin'));
    }

    public function trimestral()
    {
        $dias = Carbon::now()->isoFormat('D');
        $fechaInit = Carbon::now()->subDay($dias-1)->isoFormat('D-M-Y');
        $fechaFin = Carbon::parse($fechaInit)->addMonth(3)->isoFormat('D-M-Y');;
        $datos = Magueras_Maquinas::all()->where('fechaCambio', '!=',  null)->where('fechaCambio', '<',  Carbon::parse($fechaInit)->addMonth(3));

        return view('user.reportes.show', compact('datos','fechaInit','fechaFin'));
    }

    public function semestral()
    {
        $dias = Carbon::now()->isoFormat('D');
        $fechaInit = Carbon::now()->subDay($dias-1)->isoFormat('D-M-Y');
        $fechaFin = Carbon::parse($fechaInit)->addMonth(6)->isoFormat('D-M-Y');;
        $datos = Magueras_Maquinas::all()->where('fechaCambio', '!=',  null)->where('fechaCambio', '<',  Carbon::parse($fechaInit)->addMonth(6));

        return view('user.reportes.show', compact('datos','fechaInit','fechaFin'));
    }

    public function anual()
    {
        $dias = Carbon::now()->isoFormat('D');
        $fechaInit = Carbon::now()->subDay($dias-1)->isoFormat('D-M-Y');
        $fechaFin = Carbon::parse($fechaInit)->addYears(1)->isoFormat('D-M-Y');;
        $datos = Magueras_Maquinas::all()->where('fechaCambio', '!=',  null)->where('fechaCambio', '<',  Carbon::parse($fechaInit)->addYears(1));

        return view('user.reportes.show', compact('datos','fechaInit','fechaFin'));
    }
}
