<?php
$page = 'solicitud';
require_once 'menu.php';
?>

<div class="row title-section">
    <div class="col-xs-12 col-lg-offset-1 col-lg-10">
        <h2>Solicitud de compra de material bibliográfico</h2>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <p> Complete el siguiente formulario si desea proponer la compra de un libro para la Biblioteca por uno de los siguientes motivos: <br>
            * La biblioteca no dispone de ningún ejemplar de este título.<br>
            * La biblioteca no dispone de una determinada edición de este título.<br>
            * La biblioteca no dispone de suficientes ejemplares de este título.<br>
            <br>
            Antes de hacer la propuesta recomendamos que consulte el catálogo bibliográfico. 
            <br>
            La biblioteca estudiará su propuesta y, si se acepta, tramitará su adquisición informando de su disponibilidad. Tenga en cuenta que existirá un plazo de demora en la adquisición.
            <br>

            <span id="ob"> * Obligatorio </span>
        </p>
        <div class="col-sm-6 ">
            <form onsubmit="return enviarSolicitud()">
                <fieldset class="form-group">
                    <legend>Solicitante</legend>
                    <div class="form-group">
                        <label for="nombre">Apellido y nombre *</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Escriba su nombre">
                    </div>
                    <div class="form-group">
                        <label for="mail">Correo electronico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mail@dominio.com">
                        <small id="emailHelp" class="form-text text-muted">No obligatorio.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleSelect1">Es socio de la biblioteca?</label>
                        <select class="form-control" id="select1">
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleSelect2">Categoria de usuario</label>
                        <select class="form-control" id="select2">
                            <option>Docente/Investigador Universitario</option>
                            <option>Estudiante Universitario</option>
                            <option>Particular</option>
                            <option>Secundario</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="form-check">
                        <label for="exampleSelect1">Prioridad *</label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                            Alta
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >
                            Media
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >
                            Baja
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >
                            Otra
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <legend>Datos del libro</legend>
                    <div class="form-group">
                        <label for="autor">Autor *</label>
                        <input type="text" class="form-control" id="autor" placeholder="Escriba su nombre y apellido">
                    </div>
                    <div class="form-group">
                        <label for="titulo">Titulo *</label>
                        <input type="text" class="form-control" id="titulo" placeholder="titulo">
                    </div>
                    <div class="form-group">
                        <label for="lugar">Lugar de edicion</label>
                        <input type="text" class="form-control" id="lugar" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="edicion">Edicion</label>
                        <input type="text" class="form-control" id="edicion" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="anio">Año de edicion</label>
                        <input type="text" class="form-control" id="anio" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="editorial">Editorial</label>
                        <input type="text" class="form-control" id="editorial" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN/ISSN</label>
                        <input type="text" class="form-control" id="isbn" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="motivo">Motivos de la propuesta</label>
                        <textarea class="form-control" id="motivo" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="comentario">Comentarios</label>
                        <textarea class="form-control" id="comentario" rows="3"></textarea>
                    </div>
                </fieldset>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>