<nav class="navbar navbar-default ">
    <div class="navbar-header">
        <button type="button"class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button>
        <a class= "navbar-brand" href="#"  >Administración: Aulas Cursos Ya</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-1">

        <ul class="nav navbar-nav">
            <li class="active"><a href="http://localhost:8083/ci3_aulascursosya/">Inicio</a></li>
<!--                <li ><a href="<?php //echo site_url('contenido/objetivos/index');   ?>">Objetivos</a></li>
            <li ><a href="<?php //echo site_url('contenido/servicios/index');   ?>">Servicios</a></li>
            <li ><a href="<?php // site_url('contenido/contacto/index');   ?>">Contáctanos</a></li>-->
            <!--<li ><a href="<?php //echo site_url('contenido/aulas/index');   ?>">Aulas Disponibles</a></li>-->
<!--                <li ><a href="<?php //echo base_url('flogin.php');   ?>">ReCaptcha</a></li>-->

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Utilidades
            <!--                        <span class="caret"></span>-->
            </a>
                                <ul class="dropdown-menu">
                                    <li ><a href="<?php echo site_url('utilidades/Crecaptcha/index');   ?>">Captcha Google</a></li>
                                    <li ><a href="<?php echo site_url('utilidades/pdfs/index');   ?>">PDFS</a></li>
                                    <li ><a href="<?php echo site_url('utilidades/correo/index');   ?>">Enviar Correo de Prueba</a></li>
                                </ul>
            </li>
            

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Configuracion
            </a>
                                <ul class="dropdown-menu">
                                    <li ><a href="<?php echo site_url('contenido/aulas/index'); ?>">Usuarios</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/capitulos'); ?>">Perfiles</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/temas'); ?>">Usuarios & Perfiles</a></li>
                                </ul>
            </li>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tablas Iniciales
            </a>
                                <ul class="dropdown-menu">
                                    <li ><a href="<?php echo site_url('contenido/aulas/index'); ?>">Niveles</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/capitulos'); ?>">Profesores</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/temas'); ?>">Info Material</a></li>
                                </ul>
            </li>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Material Educativo
            </a>
                                <ul class="dropdown-menu">
                                    <li ><a href="<?php echo site_url('contenido/aulas/index'); ?>">Materias</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/capitulos'); ?>">Capítulos</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/temas'); ?>">Temas</a></li>
                                </ul>
            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Evaluaciones
            </a>
                                <ul class="dropdown-menu">
                                    <li ><a href="<?php echo site_url('contenido/aulas/evaluacion'); ?>">Evaluaciones</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/enunciados'); ?>">Enuncionados</a></li>
                                    <li ><a href="<?php echo site_url('contenido/aulas/respuestas'); ?>">Preguntas & Respuestas</a></li>
                                </ul>
            </li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="<?php //echo site_url('usuario/registrate/index');   ?>"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>-->
            <?php
            if (!isset($_SESSION['blogin'])) {
                $_SESSION['blogin'] = 0;
            }
            ?>

            <?php
            if ($_SESSION['blogin'] === 0) {
                ?>
                <li><a href="<?php echo site_url('usuario/login/index'); ?>"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>

                <?php
            }
            ?>

            <?php
            if ($_SESSION['blogin'] === 1) {
                ?>
                <li><a href="<?php echo site_url('fin/index'); ?>"><span class="glyphicon glyphicon-log-out "></span> Salir</a></li>

                <?php
            }
            ?>

        </ul>

    </div>
</nav>  

<!-- Mensaje de Exisotos -->
<?php if (isset($msgsuccess)) { ?>
    <div class="alert alert-success">
        <strong>Exitoso!</strong> <?php echo $msgsuccess; ?>
    </div>
<?php } ?>

<!-- Mensaje de Informacion -->
<?php if (isset($msginfo)) { ?>
    <div class="alert alert-info">
        <strong>Información!</strong> <?php echo $msginfo; ?>
    </div>
<?php } ?>

<!-- Mensaje de Precaucion -->
<?php if (isset($msgwarning)) { ?>
    <div class="alert alert-warning">
        <strong>Precaución!</strong> <?php echo $msgwarning; ?>
    </div>
<?php } ?>

<!-- Mensaje de Error -->
<?php if (isset($msgdanger)) { ?>
    <div class="alert alert-danger">
        <strong>Error!</strong> <?php echo $msgdanger; ?>
    </div>
<?php } ?>


