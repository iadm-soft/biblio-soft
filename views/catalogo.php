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



        <!--<label for="">Tipo de busqueda:</label>
        <ul class="nav nav-pills" class="">
            <li class="active"><a id="tab" data-toggle="tab" href="#simple">Simple</a></li>
        <!--<li><a id="tab" data-toggle="tab" href="#avanzada">Avanzada</a></li>
        <li><a id="tab" data-toggle="tab" href="#fecha">Fecha</a></li>
        <li><a id="tab" data-toggle="tab" href="#isbn">ISBN/ISSN</a></li>
    </ul>-->

        <div class="tab-content busqueda">

            <div id="simple" class="tab-pane fade in active">
                <form id="formUno" onsubmit="return catalogoUno();">
                    <label>Buscar:</label> <input type="text" name="bsimple">
                    <button type="submit" class="btn btn-primary btn-buscar ">Buscar</button>
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
            <div id="avanzada" class="tab-pane fade">
                <form onsubmit="return catalogoDos();">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Usar paréntesis</label>
                        <label><input type="checkbox" value="">Usar relaciones</label>
                    </div>
                    <label>Cantidad de condiciones</label> <button> más</button> <button>menos</button>   
                    <div class="row">
                        <div class="col-sm-3">Operador</div>
                        <div class="col-sm-3">	 Término/s </div>
                        <div class="col-sm-3">Relación</div>
                        <div class="col-sm-3"> 	Área 	</div>
                    </div>
                    <div class="row"> 
                        <div class="col-sm-3"> Buscar </div>
                        <div class="col-sm-3"><input type="text"></div>
                        <div class="col-sm-3"><select> <option>=</option><option>+</option> </select></div>
                        <div class="col-sm-3">a <input type="text"></div>
                    </div>	
                    <div class="row"> 
                        <div class="col-sm-3"> <select> <option>Y</option><option>O</option> </select></div>
                        <div class="col-sm-3"><input type="text"></div>
                        <div class="col-sm-3"><select> <option>=</option><option>+</option> </select></div>
                        <div class="col-sm-3">a <input type="text"></div>
                    </div>		 
                    <label>Año de Publicación entre </label> <input type="text"> <label> y </label> <input type="text">
                    <label> Resultados por página</label> <select> <option>10</option><option>15</option><option>20</option><option>25</option> </select>  	
                    <button type="submit" class="btn btn-primary btn-buscar">Limpiar</button>
                    <button type="submit" class="btn btn-primary btn-buscar">Buscar</button>

                </form>
            </div>

            <div id="fecha" class="tab-pane fade">
                <form onsubmit="return catalogoTres();">
                    <label>Novedades:</label>  
                    <select> 
                        <option>ultimo MES</option>
                        <option>ultimo TRIMESTRE</option>
                        <option>ultimo CUATRIMESTRE</option>
                        <option>ultimo SEMESTRE</option>
                        <option>ultimo AÑO</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-buscar ">Buscar</button>
                </form>
            </div>

            <div id="isbn" class="tab-pane fade">
                <form onsubmit="return catalogoCuatro();">
                    <label>Buscar por ISBN/ISSN:</label> <input type="text" name="bisbn">
                    <button type="submit" class="btn btn-primary btn-buscar ">Buscar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>