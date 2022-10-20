<?php

namespace App\Http\Controllers;

use App\Exports\Reporte;
use Illuminate\Http\Request;
use App\Models\Magueras_Maquinas;
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
        $datos = Magueras_Maquinas::all();
        return view('admin.reportes.reportes',compact(['datos']));
    }

    public function export(){
        return Excel::download(new Reporte, 'Reporte.xlsx');
    }
    // public function export(){
    //     $datos = Magueras_Maquinas::all();
    //     return view('admin.reportes.ReporteTotal', compact(['datos']));
    // }
}
