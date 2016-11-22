<?php include'menu.php'; ?>
<div id="solicitud">
<h2>Solicitud de compra de material bibliográfico</h2>
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
<form>
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
<fieldset>

<fieldset class="form-group">
    <legend>Datos del libro</legend>
    <div class="form-group">
    <label for="nombre">Autor *</label>
    <input type="text" class="form-control" id="nombre" placeholder="Escriba su nombre y apellido">
  </div>
   <div class="form-group">
    <label for="nombre">Titulo *</label>
    <input type="text" class="form-control" id="titulo" placeholder="titulo">
  </div>
   <div class="form-group">
    <label for="nombre">Lugar de edicion</label>
    <input type="text" class="form-control" id="nombre" placeholder="">
  </div>
   <div class="form-group">
    <label for="nombre">Edicion</label>
    <input type="text" class="form-control" id="nombre" placeholder="">
  </div>
   <div class="form-group">
    <label for="nombre">Año de edicion</label>
    <input type="text" class="form-control" id="nombre" placeholder="">
  </div>
   
   <div class="form-group">
    <label for="nombre">Editorial</label>
    <input type="text" class="form-control" id="nombre" placeholder="">
  </div>
  <div class="form-group">
    <label for="nombre">ISBN/ISSN</label>
    <input type="text" class="form-control" id="nombre" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Motivos de la propuesta</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Comentarios</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
   </fieldset>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<?php include 'footer.php'; ?>