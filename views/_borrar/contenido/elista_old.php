<div class="panel panel-warning" >
    <div class="panel-heading">
        <div class="panel-title">Lista de Aulas</div>
    </div>  
    <div style="padding-top:30px" class="panel-body" >
        <table id="exampledt1" class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display" cellspacing="0" width="90%">
            <thead>
                <tr>
                    <th class="text-center">Action</th>
                    <th>id</th>
                    <th>nb_evaluacion</th>
                    <th>tx_imagen</th>
                    <th>fe_inicio</th>
                    <th>fe_final</th>
                    <th class="text-center">Funciones Especiales</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $item) { ?>
                    <tr onclick="frow(<?php echo $item["id"] ?>)">
                        <td></td>
                        <td><?php echo $item["id"] ?></td>
                        <td><?php echo $item["nb_evaluacion"] ?></td>
                        <td><?php echo $item["tx_imagen"] ?></td>
                        <td><?php echo $item["fe_inicio"] ?></td>
                        <td><?php echo $item["fe_final"] ?></td>
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
	
	$(document).ready(function() {
		$('#example').DataTable( {
			"ajax": '<?php echo site_url('contenido/aulas/aulaspj'); ?>''
		} );
	} );	
	
</script>

	

