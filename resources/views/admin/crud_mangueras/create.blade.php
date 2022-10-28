<x-layouts.admin>
    <div class="card">
        <h4>
            <div class="card-header">
                Agregar Nueva Manguera
            </div>
        </h4>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('mangueras.store') }}" method="POST">
                @csrf

                <div class="row form-group">
                <div class="mb-3 col-md-6">
                    <label class="form-label"><strong>Descripción</strong></label>
                    <input type="text" class="form-control" name="descripcion">

                </div>
                <div class="mb-3 col-md-6">
                        <label class="form-label"><strong>Manguera </strong> </label>
                        <input type="text" class="form-control" name="manguera">
                </div>
            </div>


                <div class="row form-group">

                    <div class="mb-3 col-md-6">
                        <label class="form-label"><strong>Fitting 1 </strong> </label>
                        <input type="text" class="form-control" name="fitting1">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label"><strong>Fitting 2</strong></label>
                        <input type="text" class="form-control" name="fitting2">
                    </div>

                </div>

                <div class="row form-group">

                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong>Longitud </strong> </label>
                        <input type="number" class="form-control" name="longitud">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong>Presión</strong></label>
                        <input type="number" class="form-control" name="presion">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label"><strong>Protección</strong></label>
                        <select class="form-select" name="proteccion" aria-label="Default select example">
                            <option selected value="NO">NO</option>
                            <option value="SI">SI</option>
                            {{-- <option value="NO">NO</option> --}}
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Extra</strong></label>
                    <input type="text" class="form-control" name="Extra">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-bloc">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>
