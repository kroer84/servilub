<x-layouts.admin>
    <div class="card">
        <h4>
            <div class="card-header">
                Agregar Nuevo Usuario
            </div>
        </h4>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>Nombre:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>Email:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>
                </div>
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>Password:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-4 row form-group">
                            <div class="col-lg-2 col-md-12">
                                <strong>Rol de usuario:</strong>
                            </div>
                            <div class="col-lg-10 col-md-12">
                                <select class="form-select" name="role" aria-label="Default select example">
                                    <option selected>Seleccione el Rol</option>
                                    <option value="User">Usuario</option>
                                    <option value="Admin">Administrador</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4 row form-group">
                            <div class="col-lg-2 col-md-12">
                                <strong>Estado del usuario:</strong>
                            </div>
                            <div class="col-lg-10 col-md-12">
                                <select class="form-select" name="state" aria-label="Default select example">
                                    <option selected>Seleccione el Estado</option>
                                    <option value="On">Activo</option>
                                    <option value="Off">Desactivado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-bloc">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>
