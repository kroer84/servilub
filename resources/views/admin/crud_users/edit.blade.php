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
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>Nombre:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="mb-4 row form-group">
                    <div class="col-lg-2 col-md-12">
                        <strong>Email:</strong>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{ $user->email }}">
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
                                    <option selected>{{ ($user->role == 'Admin') ? 'Admin' : 'User' }}</option>
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
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
                                    <option selected>{{ ($user->state == 'On') ? 'On' : 'Off' }}</option>
                                    <option value="On">On</option>
                                    <option value="Off">Off</option>
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
