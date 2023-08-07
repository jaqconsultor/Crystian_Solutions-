
<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2"> 


        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Ficha de Registro de Usuario</div>						
            </div>     

            <form method="post" class="form-horizontal">
                <fieldset>

                    </br>

                    <!-- Form Name -->
                    <!-- <legend>Ficha del Cliente</legend> -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="refcodigoo">Ussuario</label>  
                        <div class="col-md-4">
                            <input id="nusuario" name="nusuario" placeholder="Ingrese nombre de usuario" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    </br>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nombre">Nombres</label>  
                        <div class="col-md-7">
                            <input id="nombre" name="nombre" placeholder="Ingrese el Nombres" class="form-control input-md" required="" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nombre">Apellidos</label>  
                        <div class="col-md-7">
                            <input id="appellido" name="apellido" placeholder="Ingrese Apellidos" class="form-control input-md" required="" type="text">

                        </div>
                    </div>

                    </br>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="rif">Correo de Usuario</label>  
                        <div class="col-md-7">
                            <input id="correo1" name="correo1" placeholder="ingrese su correo" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="rif">Verifique su correo</label>  
                        <div class="col-md-7">
                            <input id="correo1" name="correo1" placeholder="ingrese su correo nuevamente" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    </br>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="passwordinput">Contraseña</label>
                        <div class="col-md-4">
                            <input id="passwordinput1" name="passwordinput1" placeholder="Ingrese su clave" class="form-control input-md" type="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="passwordinput">Verifique su Contraseña</label>
                        <div class="col-md-4">
                            <input id="passwordinput2" name="passwordinput2" placeholder="ingrese su clave nuevamente" class="form-control input-md" type="password">
                        </div>
                    </div>

                    </br>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono1">Teléfonos</label>  
                        <div class="col-md-4">
                            <input id="telefono1" name="telefono1" placeholder="Ingrese un Número de Teléfono" class="form-control input-md" required="" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono2"></label>  
                        <div class="col-md-4">
                            <input id="telefono2" name="telefono2" placeholder="Ingrese un Número de Teléfono" class="form-control input-md" type="text">

                        </div>
                    </div>

                    

                    <div style="margin-bottom: 25px" class="input-group">
                        <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                        <!--<div class="g-recaptcha" data-sitekey="6LfmqzIUAAAAAIvQ_ejBeqEqEsUeP3vZuPS2zyIL"></div>-->
                        <?php echo $this->recaptcha->render(); ?>
                    </div>
                    
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="button1id"></label>
                        <div class="col-md-8">
                            <button id="button1id" name="button1id" class="btn btn-success">Guardar</button>
                            <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                    
                    </br>

                    <div class="col-md-8 control-label">
                        <a href="<?php echo site_url('usuario/login/index');?>">Acceder pantalla de acceso</a>
                    </div></br></br>

                </fieldset>
            </form>

        </div>             

    </div> 

</div>


