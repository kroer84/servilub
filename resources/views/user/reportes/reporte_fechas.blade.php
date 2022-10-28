<x-layouts.user>

    <div class="container">
        <div class="card">
            <div class="text-center card-header">
                <h4>Fechas</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.reporte.guardar') }}" method="POST">
                    @csrf

                    <div class="mb-4 row form-group">
                        <div class=" col-md-6">
                            <label for="" class="col-form-label">Fecha Inico</label>
                            <input class="form-control" type="date" id="FechaIni" name="FechaInit"/>
                        </div>
                        <div class=" col-md-6">
                            <label for="" class="col-form-label">Fecha Fin</label>
                            <input class="form-control" type="date" id="FechaFin" name="FechaFin"/>
                        </div>
                    </div>


                    <div class="text-center align-middle card-footer">
                        <div class="row align-items-start">

                            <div class="col">
                                <button type="submit" class="btn btn-success btn-block"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.user>
