<x-layouts.admin>
    <div class="card">
        <h4>
            <div class="card-header">
                Instalación
            </div>
        </h4>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('Instalacion.store') }}" method="POST">
                @csrf
                <div class="row form-group">

                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong> BMK </strong> </label>
                        <input type="text" class="form-control" name="identificador">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong>Maquina</strong></label>
                        <select name="maquina_id" id="" class="form-control">
                        <option value="">Selecciona una maquina</option>
                        @foreach ($maquinas as $maquina)
                            <option value="{{ $maquina->id }}">{{ $maquina->no_maq }} - {{ $maquina->des_maq }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong>Manguera</strong></label>
                        <select name="manguera_id" id="" class="form-control">
                        <option value="">Selecciona una manguera</option>
                        @foreach ($mangueras as $manguera)
                            <option value="{{ $manguera->id }}">{{ $manguera->descripcion }} - {{ $manguera->fitting1 }} - {{ $manguera->fitting1 }} - {{ $manguera->longitud }} mm - {{ $manguera->presion }} bar</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">

                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong> Fecha de Instalacion </strong> </label>
                        <input type="date" class="form-control" name="instalacion">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong>Tiempo en años para cambio</strong></label>
                        <input type="number" class="form-control" name="cambio">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong>Tiempo en años para chequeo</strong></label>
                        <input type="number" class="form-control" name="chequeo">
                    </div>
                </div>



                <div class="row form-group">

                    <div class="mb-3 col-md-6">
                        <label class="form-label"><strong>Estado de la Manguera</strong></label>
                        <select class="form-select" name="estado_compra" aria-label="Default select example">
                            <option selected value="">Selecciones el Estado</option>
                            <option value="Instalada">Instalada</option>
                            <option value="Sin Instalar">Sin Instalar</option>
                            <option value="Presupuesto">Presupuestada</option>
                            <option value="Pedido">Pedido</option>
                            <option value="Almacen">Almacen</option>
                            <option value="Cambio">Cambio</option>
                            <option value="Desmontar">Desmontar </option>
                            <option value="Mejora">Mejora </option>
                            {{-- <option value="NO">NO</option> --}}
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label"><strong>Precio</strong></label>
                        <input type="number" class="form-control" name="precio">
                    </div>

                </div>


                <div class="row form-group">

                    <div class="mb-3 col-md-12">

                        <label class="form-label"><strong>Nota</strong></label>
                        <input type="text" class="form-control" name="nota">

                    </div>

                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-bloc">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>
