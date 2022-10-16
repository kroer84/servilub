<x-layouts.admin>

    <div class="card">
        <h4>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        Usuarios
                    </div>
                    <div class="col d-flex justify-content-end">
                            <a href="{{ route('admin.users.create') }}">
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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Estado</th>
                        <th>Correo electronico</th>
                        <th class="text-center">Acciones</th>
                        <tbody>
                    </tr>
                    @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td class="text-center">
                            @if($user->role == 'Admin')
                            <h5>
                                <span class="badge bg-success">Administrador</span>
                            </h5>
                            @else
                            <h5>
                                <span class="badge bg-secondary">Usuario</span>
                            </h5>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($user->state == 'On')
                            <h5>
                                <span class="badge rounded-pill bg-primary">Activo</span>
                            </h5>
                            @else
                            <h5>
                                <span class="badge rounded-pill bg-danger">Desactivado</span>
                            </h5>
                            @endif
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td class="text-center">
                            {{-- <button type="button" class="btn btn-success">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button> --}}

                            {{-- <a class="btn btn-info" href="{{ route('admin.users.show',$user->id) }}">Show</a> --}}

                            <a class="btn btn-primary" href="{{ route('admin.users.edit',$user->id) }}"><i class="fa-solid fa-pen"></i></a>

                            <!-- Button trigger modal <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button> -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $user->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                        </td>

                    </tr>
                    @include('admin.crud_users.delete')
                    @empty
                    <li>No hay usuarios registrados.</li>
                    @endforelse
                </table>
            </div>

            {{ $users->links() }}

        </div>
    </div>

</x-layouts.admin>
