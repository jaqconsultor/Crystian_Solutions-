<div class="panel panel-warning">
	<div class="panel-heading">
		<div class="panel-title">Evaluaciones</div>
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
			"ajax": '<?php echo site_url('contenido/aulas/aulaspj'); ?>'
		} );

		$('#exampledt1 tbody').on('click', 'tr', function () {
			var data = tablescroll.row( this ).data();


			$("#codigo").val(data[1]);
			$("#codigo1").val(data[1]);
			$("#nb_evaluacion").val(data[2]);
			$("#tx_imagen").val(data[3]);
			$("#fe_inicio").val(data[4]);
			$("#fe_final").val(data[5]);
			$("#ca_puntaje").val(data[6]);
			
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

function mostrardatos( vdat ) {

        var vanterior;
        var procesando;
        var ok;


		var nerr;
		nerr = 1;

		var vurl;

		vurl = '<?php echo site_url('contenido/aulas/eva_quitar'); ?>';

        var parametros = {
			"codigo": vdat
        };

        ok = 1;

        $.ajax({
            data: parametros,
			url: vurl,
            type: 'post',
            async: false,
			enctype: "multipart/form-data",
            beforeSend: function () {
                console.log("Empezando");
                procesando = '<span class="alert alert-warning glyphicon glyphicon-transfer"></span>';
            },
            error: function (response) {
                console.log("Error");
                console.log(response);
                response1 = JSON.stringify(response);
                ok = -1;

            },
            success: function (response) {
                response1 = JSON.stringify(response);
                console.log("Satisfactorio");
                ok = 1;
				
				
            },
            complete: function (response) {
                console.log("complete");

            }
        });




}


</script>

	

