<?php 
    $page = 'noticias';
    require_once 'menu.php'; 
?>

<div class="row title-section">
    <div class="col-xs-12 col-lg-offset-1 col-lg-10">
        <h2>Intereses</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <ul class="nav nav-tabs">
            <li class="active"><a id="tabrec" data-toggle="tab" href="#recreacion">Recreacion</a></li>
            <li><a id="tabap" data-toggle="tab" href="#apoyo">Apoyo a la educacion</a></li>
            <li><a id="tabinv" data-toggle="tab" href="#investigacion">Investigacion</a></li>
            <li><a id="tabcur" data-toggle="tab" href="#curiosidades">Curiosidades</a></li>
        </ul>

        <div class="tab-content">
            <div id="recreacion" class="tab-pane fade in active">
                <h3>Coleccion Libro Fotogragico</h3>
                <p>
                    Los libros son un medio fundamental para la difusión de la fotografía.
                    A la vez que funcionan como una suerte de archivos y dispositivos de memoria, son la posibilidad de plasmar la instantaneidad dando testimonio, documentando, haciendo historia.
                    En el año 2014 en las Salas Museo de la Biblioteca Pública se conformó esta nueva colección denominada Libro Fotográfico con el objetivo de brindar acceso público a publicaciones de difícil acceso en el país (ya sea por su procedencia, sus costos o su circulación restringida).
                    Con esta muestra los invitamos a conocer parte de los libros que la conforman.

                    Pueden consultarse en el sector de Salas Museo (1º piso) y solicitar más información en: salasmuseo@biblio.unlp.edu.ar
                    Desde el 11 al 28 de agosto de 2015
                    Hall central de la Biblioteca Pública de la UNLP
                    Lunes a viernes de 8 a 18:30 hs.
                </p>
            </div>
            <div id="apoyo" class="tab-pane fade">
                <h3>La Biblio los invita! La Biblio los espera!</h3>
                <p> Visitas especialmente pensadas y preparadas para Escuelas Secundarias. </p>
            </div>
            <div id="investigacion" class="tab-pane fade">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>La pintura que flota</h3>
                        <p>Papeles marmoleados de las Salas-Museo y colecciones especiales de la Biblioteca Pública.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3> Banco de Imágenes del Quijote - QBI - </h3>
                        <p>
                            En el año 2002 comenzó su andadura en el Centro de Estudios Cervantinos de Alcalá de Henares el proyecto de crear un Banco de imágenes del Quijote con intención de reunir, clasificar y etiquetar, todas las ilustraciones de las ediciones quijotescas
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Biblioteca Electrónica de Ciencia y Tecnología</h3>
                        <p>Metabuscador de la Biblioteca Electrónica de Ciencia y Tecnología</p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Periódicos existentes en la Hemeroteca</h3> 
                        <p> Compartimos aquí el enlace al listado actualizado de periódicos que forma parte del acervo documental de la Hemeroteca.</p>
                    </div>
                </div>
            </div>
            <div id="curiosidades" class="tab-pane fade">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Tandil Tidende</h3>
                        <small> Diario Dinamarqués ilustrado de Tandil de 1889 </small>
                        <p>En 1889, el ilustrado dinamarqués Blas Grothe fundó Tandils Tidende, periódico en dinamarqués, único en Sudamérica, que salió nada menos que durante 24 años constituyéndose en un caso inédito en el periodismo regional. Tuvo gran difusión no sólo en la colonia danesa de Tandil, sino en todo el país y aún en Dinamarca. Su salida era originalmente quincenal. Difundía todo tipo de noticias, especialmente las que podían ser de interés para la colectividad.
                            Material de consulta in situ. Al estar encuadernado no permite fotocopiado.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3> Artículo de la Biblioteca en Wikipedia </h3>
                        <small> Estado de avance del artículo oficial de la Biblioteca Pública en Wikipedia</small>
                        <p>Luego de la editatón del 20 de septiembre de 2014, llevada a cabo en la Sala Parlante de la Biblioteca, el artículo oficial de la Biblioteca fue tomando forma
                            Compartimos aquí el enlace para que puedan leer lo que hasta el momento se ha generado
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>