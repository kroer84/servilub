<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magueras_Maquinas;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = Magueras_Maquinas::whereIn('estado_compra', ['Cambio','Almacen'])->orderBy('identificador','DESC')->get();

        return view('thyssenkrupp.home',compact(['datos']));
    }

    public function info()
    {
        return view('info');
    }
}
