<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
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
}
