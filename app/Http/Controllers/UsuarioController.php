<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Crypt;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminUser');
    }
    public function index()
    {
        $users = User::orderBy('id')->paginate(10);
        return view('admin.crud_users.index',compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud_users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'state' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $Usuario = new User;
        $Usuario->name = $request->name;
        $Usuario->role = $request->role;
        $Usuario->state = $request->state;
        $Usuario->email = $request->email;
        $Usuario->password = bcrypt($request->password);
        $Usuario->save();
        // User::create($request->all());
        return redirect()->route('admin.users.index')->with('success','Usiario Creado Satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.crud_users.edit', compact('user'));
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
        $actualizar = User::findOrFail($id);
        $actualizar->name = $request->name;
        $actualizar->role = $request->role;
        $actualizar->state = $request->state;
        $actualizar->email = $request->email;
        $actualizar->password = bcrypt($request->password);
        $actualizar->save();
        return redirect()->route('admin.users.index')->with('success','Los Datos Del Usiario Se Actualizaron Satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User::where('id', $id)->delete();
        $borrar = User::findOrFail($id);
        $borrar->delete();
        return redirect('/admin/users');
    }
}
