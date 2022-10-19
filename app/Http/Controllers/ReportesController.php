<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magueras_Maquinas;

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

}
