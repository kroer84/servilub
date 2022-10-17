<x-layouts.admin>

    <div class="card">
        <h4>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        Mangueras
                    </div>
                    <div class="col d-flex justify-content-end">

                        <a href="{{ route('mangueras.create') }}">

                            <button type="button" class="btn btn-success rounded-circle">
                                <i class="fa-solid fa-plus text-white"></i>
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
                        <th class="text-center">Acciones</th>
                        <th class="text-center">ID</th>
                        <th class="text-center">Descripcion </td>
                        <th class="text-center">Fitting 1 </td>
                        <th class="text-center">Fitting 2 </td>
                        <th class="text-center">Longitud </td>
                        <th class="text-center">Presión </td>
                        <th class="text-center">Protección </td>
                        <th class="text-center">Extra </td>
                        <tbody>
                    </tr>
                    @forelse($datos as $dato)
                    <tr>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('mangueras.edit',$dato->id) }}"><i
                                    class="fa-solid fa-pen"></i></a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-delete-manguera-{{ $dato->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                        <td class="text-center">{{ $dato->id }}</td>
                        <td class="text-center">{{ $dato->descripcion }}</td>
                        <td class="text-center">{{ $dato->fitting1 }}</td>
                        <td class="text-center">{{ $dato->fitting2 }}</td>
                        <td class="text-center">{{ $dato->longitud }}</td>
                        <td class="text-center">{{ $dato->presion }}</td>
                        <td class="text-center">{{ $dato->proteccion }}</td>
                        <td class="">{{ $dato->Extra }}</td>
                    </tr>
                    @include('admin.crud_mangueras.delete')
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                </table>
            </div>

            {{ $datos->links() }}

        </div>
    </div>

</x-layouts.admin>
