<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use App\Models\Magueras_Maquinas;
use Illuminate\Http\Request;

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
        $datos = Magueras_Maquinas::all()->where('fechaCambio', '>=', $request->get('FechaInit'))->where('fechaCambio', '<=', $request->get('FechaFin'));

        return view('user.reportes.show', compact('datos'));
    }
}
