<x-layouts.admin>

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
            <div class="table-responsive mt-3">
                <table class="table table-bordered text-center align-middle">

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
                    @include('admin.crud_mangueras_maquinas.delete')
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

</x-layouts.admin>
