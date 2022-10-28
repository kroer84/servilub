<x-layouts.user>
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <div class="card">
        <h4>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        Reportes
                    </div>

                </div>
            </div>
        </h4>

        <div class="card-body">
            <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="table-responsive mt-3">
                <table id="tabla" class="table table-bordered text-center align-middle">
                    <tr>
                        <th class="text-start" colspan="10">
                            <h4>Plan de control de mantenimiento para mangeras hidráulicos assemblados</h4>
                        </th>
                    </tr>
                    <tr>
                        <th class="size">
                            TK-No de maq.:
                        </th>
                        <th class="text-start" colspan="3">
                            {{ $maquina->no_maq }}
                        </th>
                        <th class="text-start" colspan="2">
                            Fecha de expedicion
                        </th>
                        <th class="text-start" colspan="4">
                            {{ \Carbon\Carbon::now()->format('d/m/Y')}}
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TK-Des de maq:
                        </th>
                        <th class="text-start" colspan="3">
                            {{ $maquina->des_maq }}
                        </th>
                        <th class="text-start" colspan="2">
                            Fesp:
                        </th>
                        <th class="text-start" colspan="4">
                            {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th rowspan="2">BMK</th>
                        <th colspan="2">Módulo</th>
                        <th colspan="1">Fecha</th>
                        <th colspan="4">Tipo y asamblea</th>
                        <th colspan="1">Presión máxima</th>
                        <th colspan="1">Proteccion</th>
                        <th colspan="2">Intervalo</th>
                        <th colspan="1">Prox.cambio</th>
                        <th colspan="1">Verificacion</th>
                        <th colspan="1">Firma</th>
                        <th rowspan="2">Anotación</th>


                    </tr>
                    <tr>

                        <th scope="col">[No.]</th>
                        <th scope="col">[Descripcion]</th>
                        <th scope="col">[Fecha Istalacion:]</th>
                        <th scope="col">Manguera</th>
                        <th scope="col">1.Fitting</th>
                        <th scope="col">2.Fitting</th>
                        <th scope="col">Longitud [mm]</th>
                        <th scope="col">[bar]</th>
                        <th scope="col">si/no</th>
                        <th scope="col">Check[año]</th>
                        <th scope="col">Cambio[año]</th>
                        <th scope="col">[mes/año]</th>
                        <th scope="col">[fecha]</th>
                        <th scope="col">[nombre]</th>
                    </tr>
                        <tbody>

                    @forelse($maquina->intalaciones as $dato)
                    <tr>
                        <td class="text-center">{{ $dato->identificador }}</td>

                        <td class="text-center"> </td>
                        <td class="text-center">{{ $dato->manguera->descripcion }}</td>
                        @if ($dato->instalacion != null)
                            <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->format('d/m/Y') }}
                            </td>
                            @else
                            <td></td>
                            @endif

                        <td class="text-center">{{ $dato->manguera->manguera}}</td>
                        <td class="text-center">{{ $dato->manguera->fitting1 }}</td>
                        <td class="text-center">{{ $dato->manguera->fitting2 }}</td>
                        <td class="text-center">{{ $dato->manguera->longitud }}</td>
                        <td class="text-center">{{ $dato->manguera->presion }}</td>
                        <td class="text-center">{{ $dato->manguera->proteccion }}</td>
                        <td class="text-center">{{ $dato->cambio }}</td>

                        @if ($dato->instalacion != null)

                        @if(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()))
                            <td class="text-center alert alert-danger bg-danger bg-opacity-25">
                                {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('Y')}}
                            </td>
                        @elseif(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()->addYear(1)))
                            <td class="text-center bg-warning bg-opacity-25">
                                {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('Y')}}
                            </td>
                        @else
                            <td class="text-center bg-success bg-opacity-25">
                                {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('Y')}}
                            </td>
                        @endif

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
                        <td></td>
                    @endif

                        <td></td>
                        <td></td>
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
                filename: "Reporte {{ $maquina->no_maq }}", //Nombre del archivo de Excel
                sheetname: "{{ $maquina->des_maq }}", //Título de la hoja
            });
            let datos = tableExport.getExportData();
            let preferenciasDocumento = datos.tabla.xlsx;
            tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
        });
    </script>

</x-layouts.user>

