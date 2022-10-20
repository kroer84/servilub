<x-layouts.admin>

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
        <a href="{{ route('admin.reporte.export') }}">Exportar</a>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="table-responsive mt-3">
                <table class="table table-bordered text-center align-middle">
                    {{-- <tr>
                        <th class="text-start" colspan="10">
                            Plan de control de mantenimiento para mangeras hidráulicos assemblados
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TK - No de maq.:
                        </th>
                        <th class="text-start" colspan="3">
                            {{ $dato->maquina->no_maq }}
                        </th>
                    </tr>
                    <tr>
                        <th>
                            TK - Des de maq:
                        </th>
                        <th class="text-start" colspan="3">
                            {{ $dato->maquina->des_maq }}
                        </th>
                    </tr> --}}
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
                        <th rowspan="2">Precio</th>

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
                    @forelse($datos as $dato)
                    <tr>
                        <td class="text-center">{{ $dato->identificador }}</td>
                        <td class="text-center"> </td>
                        <td class="text-center">{{ $dato->manguera->descripcion }}</td>
                        {{-- <td class="text-center">{{ $dato->instalacion }}</td> --}}
                        <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->format('d/m/Y') }}</td>
                        <td class="text-center">{{ $dato->manguera->manguera}}</td>
                        <td class="text-center">{{ $dato->manguera->fitting1 }}</td>
                        <td class="text-center">{{ $dato->manguera->fitting2 }}</td>
                        <td class="text-center">{{ $dato->manguera->longitud }}</td>
                        <td class="text-center">{{ $dato->manguera->presion }}</td>
                        <td class="text-center">{{ $dato->manguera->proteccion }}</td>
                        <td class="text-center">{{ $dato->chequeo }}</td>
                        <td class="text-center">{{ $dato->cambio }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('m/Y')}}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->chequeo)->DiffForHumans(Carbon\Carbon::now()) }}</td>
                        <td class="text-center"> </td>
                        <td class="text-center">{{ $dato->nota }}</td>
                        <td class="text-center">${{ number_format($dato->precio, 2) }}</td>
                    </tr>
                    @include('admin.crud_mangueras_maquinas.delete')
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

</x-layouts.admin>