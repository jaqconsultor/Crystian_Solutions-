<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 


        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Ingrese sus Credenciales</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <form method="post" id="loginform" class="form-horizontal" role="form" action="<?php echo site_url('usuario/restablecer/index');?>">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="nombre de usuario o correo">                                        
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="button1id"></label>
                        <div class="col-md-12">
                            <button id="button1id" name="button1id" class="btn btn-success">Enviar Datos</button>
                            <!--<button id="btn3" name="btn3" class="btn btn-primary">Acceder con FACEBOOK</button>
                        <button id="button2id" name="button2id" class="btn btn-danger">Acceder con GOOGLE</button>-->
                        </div>
                    </div>                            

                    <div class="col-md-8 control-label">
                        <a href="<?php echo site_url('usuario/login/index');?>">Acceder pantalla de acceso</a>
                    </div></br></br>	
                </form> 
												<div class="mt-5 text-muted text-center">
							 <a href="<?php echo site_url('inicio/index'); ?>">Sing In</a>
						</div>

            </div>

        </div> 

    </div>

</div>

