<?PHP

#Para ver artivo el link del menu
function active($path){
    return request()->is($path) ? 'active' : '';
}

function checked2($valor){
    return ($valor == 'On') ? 'checked' : '';
}
