                    <div class="panel panel-warning" >
                        <div class="panel-heading">
                            <div class="panel-title">Vista de Formulario</div>
                        </div>     

                        <div style="padding-top:30px" class="panel-body" >

                            <form id="loginform" name= "loginform" class="form-horizontal" role="form" action="<?php echo site_url('usuario/login/validar'); ?>" method="post">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="nombre de usuario o correo" data-toggle="tooltip" title="coloque el usuario o correo">                                        
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="contraseña" data-toggle="tooltip" title="Coloque la contraseña">
                                </div>

                                <!--<div style="margin-bottom: 25px" class="input-group">-->
                                <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                                <!--<div class="g-recaptcha" data-sitekey="6LfmqzIUAAAAAIvQ_ejBeqEqEsUeP3vZuPS2zyIL"></div>-->
                                <?php // echo $this->recaptcha->render(); ?>
                                <!--</div>-->


                                <!-- Button (Double) -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="button1id"></label>
                                    <div class="col-md-12">
                                        <button id="button1id" name="button1id" class="btn btn-success">Acceder</button>
                                        <!--<input id="button1id" name="button1id" class="btn btn-success" onClick="validar_formulario()" type="submit" name="submit" value="Acceder" />-->
                                        <!--<button id="btn3" name="btn3" class="btn btn-primary">Acceder con FACEBOOK</button>
                                    <button id="button2id" name="button2id" class="btn btn-danger">Acceder con GOOGLE</button>-->
                                    </div>
                                </div>                            

                            </form> 

                        </div>


                    </div>