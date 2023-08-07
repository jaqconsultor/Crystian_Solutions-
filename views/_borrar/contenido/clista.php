
<div class="container-fluid"> 
    <div class="panel panel-warning" >
        <div class="panel-heading">
            <div class="panel-title">Lista de Capítulos</div>
        </div>                          
        <table id="exampledt" class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display" cellspacing="0" width="90%">
            <thead>
                <tr>
                    <th class="text-center">Action</th>
                    <th>Código Capítulo</th>
                    <th>Nombre del Capítulo</th>
                    <th>Cantidad Videos</th>
                    <th>Cantidad Ejercicios</th>
                    <th>Ejercicios Resultos</th>
                    <th class="text-center">Funciones Especiales</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $item) { ?>
                    <tr>
						<td>
							<a href="<?php echo site_url('/contenido/aulas/temas/'); ?><?php echo $item["cod_area"]; ?>/<?php echo $item["cod_capitulo"]; ?>">Ver Temas</a>
						</td>
                        <td><?php echo $item["cod_capitulo"] ?></td>
                        <td><?php echo $item["capitulo"] ?></td>
                        <td><?php echo $item["ctd_videos"] ?></td>
                        <td><?php echo $item["ctd_ejercicios_p"] ?></td>
                        <td><?php echo $item["ctd_ejercicios_r"] ?></td>
                        <td></td>
                    </tr>
                <?php } ?>     
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    function frow(v) {
        alert("click " + v);
    }
</script>
