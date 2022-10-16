<!-- Modal -->
<div class="modal fade" id="modal-delete-maquina-{{ $dato->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="form-eliminar" action="{{ route('maquinas.destroy',$dato->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ESTA SEGURO QUE DESEA ELIMINAR LA MAQUINA {{ $dato->name }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
