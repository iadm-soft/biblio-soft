<?php
$page = 'catalogo';
require_once 'menu.php';
?>
<div class="row title-section">
    <div class="col-xs-12 col-lg-offset-1 col-lg-10">
        <h2>Catálogo bibliografico</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">

        <div class=" busqueda">

            <div id="simple">
                <form id="formUno" onsubmit="return catalogoUno();">

                <div class="row">
                 <div class="form-group">
                         <label>Buscar:</label> 
                         <input type="text" class="" id="buscar">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                 </div>
                </div>
                
                </form>
                <h3>Consejos</h3>
                <ul>
                    <li> Cuantos más términos que identifiquen al material ingrese, mayor será la precisión de los resultados y obtendrá una lista mas reducida para revisar.<br>
                        Por ejemplo: <acronym title="Palabras del título">AUTOPISTA SUR</acronym>  <acronym title="Apellido de autor">CORTAZAR</acronym>  <acronym title="Nombre de la editorial">SUDAMERICANA</acronym>
                    </li>
                    <li>Como se vé en el ejemplo, puede ingresar palabras del título, apellido/nombre del autor, editorial o materia/s todos juntos y en cualquier orden.</li>
                    <li>Ingrese términos significativos, evite los aquellos que puedan resultar comunes a muchos libros.</li>
                    <li>Es indistinto ingresar en mayúsculas, minúsculas, con o sin acentos.</li>
                    <li>No agrupe usando comillas o paréntesis.</li>
                    <li>No use operadores lógicos (AND, OR, etc.).  En búsqueda simple se busca siempre que estén todos los términos ingresados (como si fuera AND).
                    </li>
                </ul>

            </div>
      
        </div>

    </div>
</div>

<?php require_once 'footer.php'; ?>