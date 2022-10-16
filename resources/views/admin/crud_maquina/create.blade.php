<x-layouts.admin>
    <div class="card">
        <h4>
            <div class="card-header">
                Agregar Nueva Maquina
            </div>
        </h4>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('maquinas.store') }}" method="POST">
                @csrf
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>TK - No de maq:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="text" name="no_maq" class="form-control" placeholder="No de maquina:">
                    </div>
                </div>
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>TK -  Des de maq:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="text" name="des_maq" class="form-control"  placeholder="Descripcion de la maquina">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-bloc">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>
