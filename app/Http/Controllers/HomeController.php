<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('state');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'User'){
            return view('thyssenkrupp.home');
            // return 'user';
        }elseif(Auth::check() && Auth::user()->role == 'Admin'){
            return redirect('admin/home');
            // return 'administrador';
        }else{
            Auth::logout();
            return redirect('/login');
        }
    }

}
