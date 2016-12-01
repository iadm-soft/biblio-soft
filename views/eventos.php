<?php 
    $page = 'eventos';
    require_once 'menu.php'; 
?>

<div class="row title-section">
    <div class="col-xs-12 col-lg-offset-1 col-lg-10">
        <h2>Actividades destacadas</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <ul class="nav nav-tabs">
            <li class="active size"><a id="tabrec" data-toggle="tab" href="#visitas">Visitas</a></li>
            <li class="size"><a id="tabap" data-toggle="tab" href="#lanzamientos">Lanzamientos</a></li>
            <li class="size"><a id="tabinv" data-toggle="tab" href="#otros">Otros</a></li>
        </ul>

        <div class="tab-content">
            <div id="visitas" class="tab-pane fade in active">
                <h3>Presencia del Vicedecano de la UNLP</h3>
                <p>
                    El lunes 12 de Diciembre, hará presencia en nuestras instalaciones el Vicedecano de la UNLP con motivo de informar las nuevas
                    políticas que se llevará adelante en relación con la Biblioteca de la UNLP, y brindará un 
                    discurso apuntado hacia los más jóvenes.
                </p>
            </div>
            <div id="lanzamientos" class="tab-pane fade">
                <h3>Presentación del VOL. III</h3>
                <p>El día 23/11/2016 se llevará a cabo en nuestras instalaciones la "Presentación del Volumen III".</p>
            </div>
            <div id="otros" class="tab-pane fade">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Convocatoria Municipal</h3>
                        <p>Se desarrollará una capacitación para aquellos interesados en las carreras correspondientes a Letras en el Salón Principal de la institución.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Charlas introductorias</h3>
                        <p>A fin de año, se harán charlas introductorias en las distintas ramas de la literatura con
                        intensiones de alcanzar un mayor nivel de entusiastas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>