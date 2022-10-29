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
                        Reporte por fechas
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
            <div class="row">
                <div class="col-md-6">
                    <div class=" d-grid gap-2 btn-block">
                    <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>
                    </div>

                </div>
                <div class="col-md-6">
            {{-- <div class="d-grid gap-2 btn-block">
                <a href="#" class="btn btn-info"><i class="fa-solid fa-file-pdf"></i> Descarga PDF</a>
            </div> --}}
                </div>
            </div>


            <div class="table-responsive mt-3">
                <table id="tabla"  class="table table-bordered text-center align-middle">

                    <tr>
                        <th class="text-center" width="100">BMK</th>
                        <th>[Descripcion]</th>
                        <th>[Fecha de Istalacion:]</th>
                        <th class="text-center">Prox.cambio</th>
                        {{-- <th class="text-center">Precio</th> --}}
                    </tr>

                        <tbody>
                    @forelse($datos as $dato)
                    <tr>
                        <td class="text-center">{{ $dato->identificador }}</td>
                        <td class="text-center">{{ $dato->manguera->descripcion }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->format('d/m/Y') }}</td>

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


                        {{-- <td class="text-center">{{ $dato->precio }}</td> --}}

                    </tr>
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                    {{-- <tfoot>
                        <td colspan="4"><h3>Total:</h3> </td>
                        <td class="result"></td>
                      </tfoot> --}}
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
                filename: "Reporte", //Nombre del archivo de Excel
                sheetname: "reporte", //Título de la hoja
            });
            let datos = tableExport.getExportData();
            let preferenciasDocumento = datos.tabla.xlsx;
            tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
        });
    </script>
</x-layouts.user>

{{-- @endsection --}}
