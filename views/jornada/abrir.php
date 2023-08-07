

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Abrir Sesion</h4>
                  </div>
                  <form action="<?php echo site_url('jornada/agregarjornada'); ?>" method="post" name="id_formulario_1" id="id_formulario_1">

                  <div class="card-body">

                    <div class="form-group">
                      <label>Date</label>
                      <input name="fe_jornada" id="fe_jornada" type="text" class="form-control" value="<?php echo $DateAndTime; ?>" readonly>
                    </div>

                   <div class="form-group">
                      <label>Obra</label>
                      <?php echo $sel_obras; ?>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Abrir
                    </button>
                  </div>
                  </form>
                  </div>
                </div>