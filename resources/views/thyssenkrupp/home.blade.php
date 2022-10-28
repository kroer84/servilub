{{-- @extends('layouts.user')

@section('content') --}}

<x-layouts.user>
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <div class="card">
        <h4>
            <div class="card-header">
                <div class="row">
                    <div class="col text-center">
                        Admin
                    </div>

                </div>
            </div>
        </h4>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>
            <div class="table-responsive mt-3">
                <table id="tabla"  class="table table-bordered text-center align-middle">

                    <tr>
                        <th class="text-center">BMK</th>
                        <th>[Descripcion]</th>
                        <th>[Fecha de Istalacion:]</th>
                        <th scope="col">Manguera</th>
                        <th scope="col">1.Fitting</th>
                        <th scope="col">2.Fitting</th>
                        <th scope="col">Longitud [mm]</th>
                        <th class="text-center">Presión máxima[bar]</th>
                        <th class="text-center">Prox.cambio</th>
                        <th class="text-center">Anotación</th>
                    </tr>

                        <tbody>
                    @forelse($datos as $dato)
                    <tr>
                        <td class="text-center">{{ $dato->identificador }}</td>
                        <td class="text-center">{{ $dato->manguera->descripcion }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->format('d/m/Y') }}</td>
                        <td class="text-center">{{ $dato->manguera->manguera}}</td>
                        <td class="text-center">{{ $dato->manguera->fitting1 }}</td>
                        <td class="text-center">{{ $dato->manguera->fitting2 }}</td>
                        <td class="text-center">{{ $dato->manguera->longitud }}</td>
                        <td class="text-center">{{ $dato->manguera->presion }}</td>


                        @if ($dato->instalacion != null)

                        @if(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()))
                            <td class="text-center alert alert-danger bg-danger bg-opacity-25">
                                {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->isoFormat('MMMM/Y')}}
                            </td>
                        @elseif(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()->addYear(1)))
                            <td class="text-center bg-warning bg-opacity-25">
                                {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->isoFormat('MMMM/Y')}}
                            </td>
                        @else
                            <td class="text-center bg-success bg-opacity-25">
                                {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->isoFormat('MMMM/Y')}}
                            </td>
                        @endif

                    @else

                        <td></td>
                    @endif


                        <td class="text-center">{{ $dato->nota }}</td>

                    </tr>
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
    <script>
        const $btnExportar = document.querySelector("#btnExportar"),
            $tabla = document.querySelector("#tabla");

        $btnExportar.addEventListener("click", function() {
            let tableExport = new TableExport($tabla, {
                exportButtons: false, // No queremos botones
                filename: "Reporte Cambios", //Nombre del archivo de Excel
                sheetname: "cambios proximos", //Título de la hoja
            });
            let datos = tableExport.getExportData();
            let preferenciasDocumento = datos.tabla.xlsx;
            tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
        });
    </script>
</x-layouts.user>

{{-- @endsection --}}
