<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 


        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Restableer Contraseña</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <form id="loginform" class="form-horizontal" role="form" action="<?php echo site_url('usuario/login/index');?>">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password1" type="password" class="form-control" name="password" placeholder="contraseña">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password2" type="password" class="form-control" name="password" placeholder="contraseña">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                        <!--<div class="g-recaptcha" data-sitekey="6LfmqzIUAAAAAIvQ_ejBeqEqEsUeP3vZuPS2zyIL"></div>-->
                        <?php echo $this->recaptcha->render(); ?>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="button1id"></label>
                        <div class="col-md-12">
                            <button id="button1id" name="button1id" class="btn btn-success">Restablecer</button>
                            <!--<button id="btn3" name="btn3" class="btn btn-primary">Acceder con FACEBOOK</button>
                        <button id="button2id" name="button2id" class="btn btn-danger">Acceder con GOOGLE</button>-->
                        </div>
                    </div>                            


                </form> 

            </div>
        </div>
    </div>
</div>