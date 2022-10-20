<!-- Modal -->
<div class="modal fade" id="modal-delete-mangueras_maquinas-{{ $dato->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="form-eliminar" action="{{ route('Instalacion.destroy',$dato->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Está seguro que desea eliminar la Instalación?: {{ $dato->identificador }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>  Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>
