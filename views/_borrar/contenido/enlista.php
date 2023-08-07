<div class="panel panel-warning">
	<div class="panel-heading">
		<div class="panel-title">Lista</div>
	</div>
	<div style="padding-top: 30px" class="panel-body">
		<table id="exampledt1"
			class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display"
			cellspacing="0" width="90%">
			<thead>
				<tr>
					<th class="text-center">Action</th>
                    <?php
                    $arrlength = count($campos);
                    for ($x = 0; $x < $arrlength; $x ++) {
                        echo "<th>";
                        echo $campos[$x];
                        echo "</th>";
                    }
                    ?>
                    <th class="text-center">Funciones Especiales</th>
				</tr>
            </thead>
	    <tfoot>
            <tr>
                    <th class="text-center">Action</th>
					<?php
                    $arrlength = count($campos);
                    for ($x = 0; $x < $arrlength; $x ++) {
                        echo "<th>";
                        echo $campos[$x];
                        echo "</th>";
                    }
                    ?>
                    <th class="text-center">Funciones Especiales</th>
            </tr>
	    </tfoot>


		</table>
    </div> 
</div>

<script type="text/javascript">
    function frow(v) {
        alert("click " + v);
    }
	
	$(document).ready(function() {
		var tablescroll = $('#exampledt1').DataTable( {
			"ajax": '<?php echo site_url('contenido/aulas/enpj') . "/" . $evalua; ?>'
		} );

		$('#exampledt1 tbody').on('click', 'tr', function () {
			var data = tablescroll.row( this ).data();

			$("#codigo0").val(data[1]);
			$("#codigo1").val(data[1]);
			$("#codigo2").val(data[1]);
			$("#codigo11").val(data[1]);
			
			$("#nb_evaluacion1").val(data[2]);
			$("#tx_imagen1").val(data[3]);

			$("#nb_evaluacion2").val(data[2]);
			$("#tx_imagen2").val(data[3]);

			
			$("#proceso1").html("");

			//alert( 'Los Datos Fueron Cargado en el Formulario' );
			
		} );

		
		setInterval( function () {
			tablescroll.ajax.reload();
			//$("#proceso1").html("");
		}, 10000 );
		
	} );	

    function refrescardt() {
//        tablescroll.ajax.reload();
    }

/*
setInterval( function () {
    table.ajax.reload();
}, 30000 );
*/
	
</script>

	

