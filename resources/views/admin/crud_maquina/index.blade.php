<x-layouts.admin>

    <div class="card">
        <h4>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        Maquinas
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="{{ route('maquinas.create') }}">
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
                        <th>TK - No de maq:</th>
                        <th>TK - Des de maq:</th>

                        <tbody>
                    </tr>
                    @forelse($datos as $dato)
                    <tr>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('maquinas.edit',$dato->id) }}"><i
                                    class="fa-solid fa-pen"></i></a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-delete-maquina-{{ $dato->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                        <td class="text-center">{{ $dato->id }}</td>
                        <td>{{ $dato->no_maq }}</td>
                        <td>{{ $dato->des_maq }}</td>
                    </tr>
                    @include('admin.crud_maquina.delete')
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                </table>
            </div>

            {{ $datos->links() }}

        </div>
    </div>

</x-layouts.admin>
