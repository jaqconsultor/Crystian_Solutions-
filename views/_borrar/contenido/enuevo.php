<div class="panel panel-info" >
    <div class="panel-heading">
        <div class="panel-title">Evaluacion</div>
    </div>     

    <div style="padding-top:30px" class="panel-body" >

<form id="loginform" name= "loginform" class="form-horizontal" role="form" action="<?php echo site_url('contenido/aulas/eva_insertar');?>" method="post"> 
<div class="form-inline" >
	
			<input type="hidden" id="codigo" name="codigo" value="">
	
            <div style="margin-bottom: 25px" class="input-group">
                Nombre Evaluacion
                <input id="nb_evaluacion" name="nb_evaluacion" type="text" class="form-control" value="" required>                                        
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                Nombre Archivo Imagen
                <input id="tx_imagen" name="tx_imagen" type="text" class="form-control" readonly>  				
            </div>
        
            <div style="margin-bottom: 25px" class="input-group">
                Fecha Inicio
                <input id="fe_inicio" name="fe_inicio" type="date" class="form-control" value="" required>                                        
            </div>
        
            <div style="margin-bottom: 25px" class="input-group">
                Fecha Final
                <input id="fe_final" name="fe_final" type="date" class="form-control" value="" required>                                        
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                Cantidad de Puntaje
                <input id="ca_puntaje" name="ca_puntaje" type="number" class="form-control" value="" size="4" required>                                        
            </div>
        
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
                <div id="proceso1" name="proceso1" ></div>                            
            </div>                            
            
        </form>  

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


        return 0; 

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

		if ( $("#nb_evaluacion").val() == "" ) {
			nerr = -1;
		}



		if ( $("#fe_inicio").val() == "" ) {
			nerr = -1;
		}

		if ( $("#fe_final").val() == "" ) {
			nerr = -1;
		}

		if ( $("#ca_puntaje").val() == "" ) {
			nerr = -1;
		}

		if ( nerr <= 0 ) {
			alert("Todos los Datos son Requeridos");
			return -1;
		}

}

	if ( vdat == 0 ) {

		vurl = '<?php echo site_url('contenido/aulas/eva_insertar'); ?>';

        var parametros = {
            "nb_evaluacion": $("#nb_evaluacion").val(),
            "tx_imagen": $("#tx_imagen").val(),
            "fe_inicio": $("#fe_inicio").val(),
            "fe_final": $("#fe_final").val(),
            "ca_puntaje": $("#ca_puntaje").val()
        };

	}

	if ( vdat == 1 ) {

		vurl = '<?php echo site_url('contenido/aulas/eva_guardar'); ?>';

        var parametros = {
			"codigo": $("#codigo").val(),
            "nb_evaluacion": $("#nb_evaluacion").val(),
            "tx_imagen": $("#tx_imagen").val(),
            "fe_inicio": $("#fe_inicio").val(),
            "fe_final": $("#fe_final").val(),
            "ca_puntaje": $("#ca_puntaje").val()
        };

	}

	if ( vdat == 2 ) {

		vurl = '<?php echo site_url('contenido/aulas/eva_quitar'); ?>';

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
			enctype: "multipart/form-data",
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
                console.log("Satisfactorio");
                $vsi = '<span class="alert alert-success glyphicon glyphicon-saved"></span>';
                $(objeto).html($vsi);
                ok = 1;
				
				$("#nb_evaluacion").val("");
				$("#tx_imagen").val("");
				$("#fe_inicio").val("");
				$("#fe_final").val("");
				$("#ca_puntaje").val("");
				
            },
            complete: function (response) {
                console.log("complete");
				//location.reload(true);
				//refrescardt();
				
				$("#proceso1").html("");

            }
        });

		vurl = '<?php echo URL_BASE_SITIO; ?>creardir.php';

        var parametros = {
			"codigo1": $("#nb_evaluacion").val()
        };

		
        $.ajax({
            data: parametros,
			url: vurl,
            type: 'post',
            async: false,
            beforeSend: function () {
                console.log("Empezando");
            },
            error: function (response) {
                console.log("Error");
                console.log(response);
                response1 = JSON.stringify(response);

            },
            success: function (response) {
                console.log("Satisfactorio");
				
            },
            complete: function (response) {
                console.log("complete");

			}
        });
		
		
		
        //$(objeto).html(vanterior);
        return ok;
    }
</script>


<script>
$(document).ready(function() {
    $(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: '<?php echo URL_BASE_SITIO; ?>upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                console.log("Empezando");
            },
            error: function (response) {
                console.log("Error");
                console.log(response);
                response1 = JSON.stringify(response);
                alert(response1);
				//verror = '<span class="alert alert-danger glyphicon glyphicon-floppy-remove"> Error Enviando Datos</span>';

            },
            success: function(response) {
                console.log("Success");
				console.log(response);
                response1 = JSON.stringify(response);
                /*if (response != 0) {
                    $(".card-img-top").attr("src", response);
                } else {
                    alert('Formato de imagen incorrecto.');
                }*/
            }
        });
        return false;
    });
});
</script>

<form method="POST" action="<?php echo URL_BASE_SITIO; ?>upload.php" enctype="multipart/form-data">
	<input type="hidden" id="codigo1" name="codigo1" value=""/>
	<input type="hidden" id="codigo111" name="codigo111" value="<?php echo url_completa(); ?>"/>
	
    <div>
      <span>Upload a File:</span>
      <input type="file" name="uploadedFile" />
    </div>
 
    <input type="submit"  name="uploadBtn" value="Upload" />
  </form>


<script>
    function prueba() {
        alert( $("#codigo1").val() );
        return 1;
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