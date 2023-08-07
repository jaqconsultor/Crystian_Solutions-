<?php $base_url = base_url(); ?>
<!DOCTYPE html>
<html>
<head>
<!-- Descripcion de la Pagina de Factura por Servicio -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="Sistema de Factura x Servicio">
<meta name="keywords"
	content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development, Factura, Servicio, Administrativo, php, mysql, jaqconsultor, web, symfony, codeigniter">
<meta name="author" content="Jesús Guillermo Aquino Betancourt">

<!--<script src="<?php //echo $base_url; ?>dt/jquery.min.js"></script>-->
<!--<script src="<?php // echo $base_url; ?>dt/jquery.dataTables.min.js"></script>-->
<!--<script type="text/javascript" src="<?php // echo $base_url; ?>dt/datatables.min.js"></script>-->
<!--<link rel="stylesheet" type="text/css" href="<?php // echo $base_url; ?>dt/datatables.min.css"/>-->
<link rel="stylesheet" type="text/css"
	href="<?php echo $base_url; ?>dt/jquery.dataTables.min.css" />

<!-- Enlaces de css -->
<link href="<?php echo $base_url; ?>bs/css/bootstrap.min.css"
	rel="stylesheet">
<link href="<?php echo $base_url;  ?>bs/css/style.css" rel="stylesheet">

<!-- Enlaces de JS -->
<script src="<?php echo $base_url;  ?>bs/js/jquery.min.js"></script>
<script src="<?php echo $base_url; ?>bs/js/bootstrap.min.js"></script>
<script src="<?php echo $base_url; ?>bs/js/scripts.js"></script>

<!-- Enlaces de CSS -->
<!--<link href="<?php echo $base_url;    ?>metroui/css/metro.css" rel="stylesheet">-->
<!--<link href="<?php echo $base_url;    ?>metroui/css/metro-icons.css" rel="stylesheet">-->
<!--<link href="<?php echo $base_url;    ?>metroui/css/metro-responsive.css" rel="stylesheet">-->

<!-- Enlaces de JS -->
<!--<script src="<?php echo $base_url;    ?>metroui/js/metro.js"></script>-->

<!-- Data Table net -->
<!--<link href="<?php echo $base_url;  ?>DataTables/css/jquery.dataTables.min.css" rel="stylesheet">-->
<script
	src="<?php echo $base_url;  ?>DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script>
            $(document).ready(
                    function () {
                        $('#exampledt').DataTable(
                                {
                                    "scrollY": true,
                                    "scrollX": true
                                }

                        );
                    }
            );
        </script>

<!--        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>-->

<title><?php echo $title ?></title>
<!-- Colocar los Componentes de Data Table -->

</head>

<body>
	<div class="container">
