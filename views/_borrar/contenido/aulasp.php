<h2>
            <font color='#086A87'>Materias</font>
        </H2>
<div class="container-fluid"> 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="nav nav-pills">
                <li><a  class="btn panel-warning"  data-toggle="pill" href="#home">Lista</a></li>
            </ul>
            <hr />
            <div class="tab-content">
                <div id="home" class="tab-pane fade in">
                    <?php echo $Lista; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    function frow(v) {
        alert("click " + v);
    }

    $(document).ready(
            function () {
                $('#exampledt1').DataTable(
                        {
                            "scrollY": true,
                            "scrollX": true
                        }

                );
            }
    );

//$(document).ready(function() {
//    $('#example').DataTable( {
//                    "scrollY": true,
//            "scrollX": true
//    } );
//} );

//$(document).ready(function() {
//    $('#example').DataTable( {
////        "scrollY": true,
////        "scrollX": true,
//        "ajax": "Access-Control-Allow-Origin: http://localhost:8081/index.php/contenido/aulas/aulaspj",
//        "columns": [
//	    { "data": "codigo" },
//            { "data": "Nivel" },
//            { "data": "Grado" },
//            { "data": "Materia" },
//            { "data": "ctd_inscritos" },
//            { "data": "figura" },
//            { "data": "Objetivos" },
//            { "data": "Requisitos" },
//            { "data": "Instructor" },
//            { "data": "Pais" },
//        ]
//    } );
//} );




</script>



