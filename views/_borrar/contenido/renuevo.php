<div class="panel panel-info" >
    <div class="panel-heading">
        <div class="panel-title">Respuestas</div>
    </div>     

    <div style="padding-top:30px" class="panel-body" >

<!--        <form id="loginform" name= "loginform" class="form-horizontal" role="form" action="<?php //echo site_url('contenido/aulas/eva_insertar');?>" method="post"> -->
<div class="form-inline" >
	
			<input type="hidden" id="codigo" name="codigo" value="">

	               <?php
                    $arrlength = count($fcampos);
                    for ($x = 0; $x < $arrlength; $x ++) {
                   ?>
                   		<?php if( $campos[$x] != "id" ) { ?>
                   
                       		<div style="margin-bottom: 25px" class="input-group">
                            <?php echo $campos[$x]; ?>
                            <input id="<?php echo $fcampos[$x]; ?>" name="<?php echo $fcampos[$x]; ?>" type="text" class="form-control" value="">
                            </div>                           
                            
                        <?php
                        }
                        ?>
                            
                                         
                    <?php
                    }
                    ?>
        
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-3 control-label" for="button1id"></label>
                <div class="col-md-12">
				
                <button id="botonform1" type="submit" class="btn btn-default btn-block btn-sm" 
                                     onclick="guardar(0)" 
                                    ><span class="glyphicon glyphicon-save"></span> Agregar Nuevo</button>
                </div>
            </div>                            


            <div class="form-group">
                <label class="col-md-3 control-label" for="button1id"></label>
                <div class="col-md-12">

                <button id="botonform2" type="submit" class="btn btn-info btn-block btn-sm" 
                                     onclick="guardar(1)" 
                                    ><span class="glyphicon glyphicon-save"></span> Guardar Datos</button>

                </div>
            </div>                            

            <div class="form-group">
                <label class="col-md-3 control-label" for="button1id"></label>
                <div class="col-md-12">

                <button id="botonform3" type="submit" class="btn btn-danger btn-block btn-sm" 
                                     onclick="guardar(2)" 
                                    ><span class="glyphicon glyphicon-remove"></span> Quitar Registro</button>
                </div>
            </div>                            


            <div class="form-group">
                <div id="proceso1" name="proceso1" ></div>                            
            </div>                            
            
<!--        </form>  -->

    </div>

    </div>

</div>

<script>
/*
    function solonumeros() {
        valor = parseInt($("#ca_puntaje").val());
        if (isNan(valor)) {
            valor = "";
        }
        $("#ca_puntaje").val(valor);
        return 1;
    }
*/

    function guardar( vdat ) {
        var vanterior;
        var procesando;
        var ok;

		var nerr;
		nerr = 1;

		var vurl;

		//solonumeros();

		if( vdat == 2 ) {

			if ( $("#codigo").val() == "" ) {
				alert("Seleccione un Registro");
				return -1;
			}
		
		}

		if( vdat == 1 ) {

			if ( $("#codigo").val() == "" ) {
				alert("Seleccione un Registro");
				return -1;
			}
		
		}

	if ( vdat != 2 ) {

/*		if ( $("#nb_evaluacion").val() == "" ) {
			nerr = -1;
		}

		if ( $("#tx_imagen").val() == "" ) {
			nerr = -1;
		}

		if ( nerr <= 0 ) {
			alert("Todos los Datos son Requeridos");
			return -1;
		}
*/
}

	if ( vdat == 0 ) {

		vurl = '<?php echo site_url('contenido/aulas/resp_insertar'); ?>';

        var parametros = {
    			<?php
                        $arrlength = count($fcampos);
                        $f = $x + 1;
                        for ($x = 0; $x < $arrlength; $x ++) {
                            if( $fcampos[$x] == "id" ) {
                                
                            } else {
                                echo '"' . $fcampos[$x] . '": $("#'. $fcampos[$x] . '").val()';
                                if( $x != $arrlength-1 ) {
                                    echo ",";
                                }
                            }
                        }
                ?>
        };

	}

	if ( vdat == 1 ) {

		vurl = '<?php echo site_url('contenido/aulas/resp_guardar'); ?>';

        var parametros = {
    			<?php
                        $arrlength = count($fcampos);
                        $f = $x + 1;
                        for ($x = 0; $x < $arrlength; $x ++) {
                            if( $fcampos[$x] == "id" ) {
                                echo '"' . "codigo" . '": $("#'. "codigo" . '").val(),';
                            } else {
                                echo '"' . $fcampos[$x] . '": $("#'. $fcampos[$x] . '").val()';
                                if( $x != $arrlength-1 ) {
                                    echo ",";
                                }
                            }
                        }
                ?>
        };

	}

	if ( vdat == 2 ) {

		vurl = '<?php echo site_url('contenido/aulas/resp_quitar'); ?>';

        var parametros = {
			"codigo": $("#codigo").val()
        };

	}

        ok = 1;

        objeto = "#" + "proceso1";
        vanterior = $(objeto).html();

        //"Access-Control-Allow-Origin:"

        $.ajax({
            data: parametros,
			url: vurl,
            type: 'post',
            async: false,
            beforeSend: function () {
                console.log("Empezando");
                procesando = '<span class="alert alert-warning glyphicon glyphicon-transfer"></span>';
                procesando = $(objeto).html(procesando);
            },
            error: function (response) {
                console.log("Error");
                console.log(response);
                response1 = JSON.stringify(response);
                //alert(response1);
				verror = '<span class="alert alert-danger glyphicon glyphicon-floppy-remove"> Error Enviando Datos</span>';
                //verror = '<button type="button" class="btn btn-danger">Error al enviar los datos</button>';
                $(objeto).html(verror);
                ok = -1;

            },
            success: function (response) {
                response1 = JSON.stringify(response);
                console.log(response);
                console.log("Satisfactorio");
                $vsi = '<span class="alert alert-success glyphicon glyphicon-saved"></span>';
                $(objeto).html($vsi);
                ok = 1;
				
    			<?php
                        $arrlength = count($fcampos);
                        $f = $x + 1;
                        for ($x = 0; $x < $arrlength; $x ++) {
                            if( $fcampos[$x] == "id" ) {
                                echo '$("#codigo").val("");';
                            } else {
                                echo '$("#' . $fcampos[$x] . '").val("");';
                            }
                        }
                ?>
                
				
            },
            complete: function (response) {
                console.log("complete");
				//location.reload(true);
				//refrescardt();
				
				$("#proceso1").html("");

            }
        });
        //$(objeto).html(vanterior);
        return ok;
    }
</script>


<?php
/*
    <input type="button">
    <input type="checkbox">
    <input type="color">
    <input type="date">
    <input type="datetime-local">
    <input type="email">
    <input type="file">
    <input type="hidden">
    <input type="image">
    <input type="month">
    <input type="number">
    <input type="password">
    <input type="radio">
    <input type="range">
    <input type="reset">
    <input type="search">
    <input type="submit">
    <input type="tel">
    <input type="text"> (default value)
    <input type="time">
    <input type="url">
    <input type="week">
*/

?>