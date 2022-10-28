<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Magueras_Maquinas;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminUser');
    }

    public function index()
    {
        $datos = Magueras_Maquinas::whereIn('estado_compra', ['Cambio','Almacen'])->orderBy('identificador','DESC')->get();
        return view('admin.home',compact(['datos']));
    }

}



