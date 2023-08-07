<div class="container-fluid"> 
    <div class="panel panel-warning" >
        <div class="panel-heading">
            <div class="panel-title">Lista de Temas</div>
        </div>   
        <table id="exampledt" class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display" cellspacing="0" width="90%">
            <thead>
                <tr>
                    <th class="text-center">Action</th>
                    <th>Código Tema</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Formato</th>
                    <th>Tipo Estruc</th>
                    <th>Fec_a Inicio</th>
                    <th>Fec_a Final</th>
                    <th class="text-center">Funciones Especiales</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $item) { ?>
                    <tr>
                        <td>
							<a> Asociar Evaluación </a>
						</td>
                        <td><?php echo $item["cod_tema"] ?></td>
                        <td><?php echo $item["descripcion"] ?></td>
                        <td><?php echo $item["tipo"] ?></td>
                        <td><?php echo $item["formato"] ?></td>
                        <td><?php echo $item["Tipo_estr"] ?></td>
                        <td><?php //echo $item["fe_inicio"] ?></td>
                        <td><?php //echo $item["fe_final"] ?></td>
                        <td>
							
						</td>
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

