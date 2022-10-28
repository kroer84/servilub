<x-layouts.user>

    <div class="card">
        <h4>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        Maquinas
                    </div>
                    <div class="col d-flex justify-content-end">

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
                        <th>TK - No de maq:</th>
                        <th>TK - Des de maq:</th>
                        <tbody>
                    </tr>
                    @forelse($datos as $dato)
                    <tr>

                        <td class="text-center">{{ $dato->id }}</td>
                        <td>
                            <a href="{{ route('user.maquinas.show',$dato->id) }}">{{ $dato->no_maq }}</a>
                        </td>
                        <td>{{ $dato->des_maq }}</td>

                    </tr>
                    @empty
                    <li>No hay Maquinas registradas.</li>
                    @endforelse
                </table>
            </div>

            {{ $datos->links() }}

        </div>
    </div>

</x-layouts.user>
