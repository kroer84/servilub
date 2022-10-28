<?php

namespace App\Http\Controllers;

use App\Exports\Reporte;
use Illuminate\Http\Request;
use App\Models\Magueras_Maquinas;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportesController extends Controller
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
        // $datos = DB::table('manguera_maquina')->where('estado_compra', '=', 'Cambio')->get();
        // dd($datos);
        $datos = Magueras_Maquinas::whereIn('estado_compra', ['Cambio','Almacen'])->orderBy('identificador','DESC')->get();
        return view('admin.reportes.reportes',compact(['datos']));
    }

    public function export(){
        return Excel::download(new Reporte, 'Reporte.xlsx');
    }
    // public function export(){
    //     $datos = Magueras_Maquinas::all();
    //     return view('admin.reportes.ReporteTotal', compact(['datos']));
    // }

    public function qrcode($id){
        $dato = Magueras_Maquinas::find($id);
        return view('admin.qrCode.qrcode',compact(['dato']));
    }
}
