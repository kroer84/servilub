<x-layouts.admin>

    <div class="card">
        <h4>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        Istalaciones
                    </div>
                    <div class="col d-flex justify-content-end">

                        <a href="{{ route('Instalacion.create') }}">

                            <button type="button" class="btn btn-outline-success rounded-circle">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </a>
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
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center" WIDTH="100">BMK</th>
                        <th class="text-center">Maquina</th>
                        <th class="text-center">Manguera</th>
                        <th class="text-center">Fecha de Instalacion</th>
                        <th class="text-center">Checkar [años]</th>
                        <th class="text-center">Cambio [años]</th>
                        <th class="text-center"WIDTH="100">fecha de Cambio</th>
                        <th class="text-center">Estado de la compra</th>
                        <th class="text-center">nota</th>
                        <th class="text-center">precio</th>
                        <th class="text-center">Acciones</th>

                        <tbody>
                    </tr>
                    @forelse($datos as $dato)
                    <tr>
                        <td class="text-center">

                            {{ $dato->id }}
                            {{-- {{ $MyQR = QrCode::format('svg')->size(50)->color(0,0,0)->generate($dato->identificador ) }} --}}

                        </td>
                        <td class="text-center">{{ $dato->identificador }}</td>
                        <td class="text-center">{{ $dato->maquina->no_maq}}</td>
                        <td class="text-center">{{ $dato->manguera->manguera }}</td>
                        <td class="text-center">{{ $dato->instalacion }}</td>
                        <td class="text-center">{{ $dato->chequeo }}</td>

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

                        <td class="text-center">{{ $dato->estado_compra }}</td>
                        <td class="text-center">{{ $dato->nota }}</td>
                        <td class="text-center">{{ $dato->precio }}</td>
                        <td class="text-center" width="150">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                                <a class="btn btn-outline-info" href="{{route('qrcode',$dato->id)}}"><i class="fa-solid fa-qrcode"></i></a>
                                <a class="btn btn-outline-success" href="{{route('Instalacion.edit',$dato->id)}}"><i
                                {{-- <a class="btn btn-primary" href=" {{ url('admin/Instalacion/$dato->id/edit') }} "><i --}}
                                        class="fa-solid fa-pen"></i></a>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-delete-mangueras_maquinas-{{ $dato->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    @include('admin.crud_mangueras_maquinas.delete')
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                </table>
            </div>

            {{-- {{ $datos->links() }} --}}

        </div>
    </div>

</x-layouts.admin>
