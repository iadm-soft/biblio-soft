function validateSolicitud(){
    var ok = false;
    var nombre = $('#nombre');
    var email = $('#exampleInputEmail1');
    var socio = $('#select1');
    var categoria = $('#select2');
    var prioridad = $('#optionsRadios1');
    var autor = $('#autor');
    var titulo = $('#titulo');
    
    if (nombre.val() == '') {
        alert('El nombre está vacío.');
        nombre.focus();
    } else if (email.val() == '') {
        alert('El email está vacío.');
        email.focus();
    } else if (socio.val() == '') {
        alert('Se olvidó de seleccionar si es socio o no.');
        socio.focus();
    } else if (categoria.val() == '') {
        alert('Se olvidó de seleccionar una categoría.');
        categoria.focus();
    } else if (prioridad.val() == '') {
        alert('Se olvidó de seleccionar la prioridad.');
        prioridad.focus();
    } else if (autor.val() == '') {
        alert('El autor está vacío.');
        autor.focus();
    } else if (titulo.val() == '') {
        alert('El titulo está vacío.');
        titulo.focus();
    } else {
        ok = true;
    }
    
    return ok;
}

function clearSolicitud() {
    $('#nombre').val('');
    $('#exampleInputEmail1').val('');
    $('#select1').val('');
    $('#select2').val('');
    $('#optionsRadios1').val('');
    $('#autor').val('');
    $('#titulo').val('');
}

function enviarSolicitud () {
    if (validateSolicitud()) {
        alert('Se ha realizado la solicitud con éxito. Gracias.');
        clearSolicitud();
        return true;
    } 
    return false;
}