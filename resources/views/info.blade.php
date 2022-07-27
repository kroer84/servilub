@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-sm-0 col-md-4">
        </div>
        <div class="colse-12 col-md-4">
            <div class="text-center">

                <div class="card">
                    <img src="{{ asset('img/logo_2.png') }}" class="rounded mx-auto d-block" style="width: 50%; margin-top:30px">
                    <hr>
                    <div class="card-body ">
                      <h2 class="card-title text-danger">Cuenta sin acceso</h2>
                      <hr>
                      <h3>Para mayor información Comunicarse con nuestro asesor</h3>
                        <br>
                      <p class="text-white" style="background-color: black" >El usuario está registrado, pero no cuenta con los permisos necesarios para poder ingresar al sistema</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-sm-0 col-md-4">
        </div>
    </div>
 </div>
@endsection
