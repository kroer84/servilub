<x-layouts.admin>
    <div class="card">
        <h4>
            <div class="card-header">
                Editar Maquina
            </div>
        </h4>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('maquinas.update', $maquina->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>TK - No de maq:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="text" name="no_maq" class="form-control" placeholder="No de la maquina" value="{{ $maquina->no_maq }}">
                    </div>
                </div>
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>Email:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="text" name="des_maq" class="form-control"  placeholder="Descripción de la maquina" value="{{ $maquina->des_maq }}">
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-bloc">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>
