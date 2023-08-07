

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Marcar</h4>
                  </div>
                  <form method="POST" action="<?php echo site_url('marcar/marcaje'); ?>" class="needs-validation"
									novalidate="">

                  <div class="card-body">

                    <div class="form-group">
                      <h3>
                      <?php echo $nb_empleado; ?>
                      </h3>
                    </div>

                  <div class="form-group">
                      <label>Jornada</label><br>
                      <?php echo $sel_jornada; ?>
                    </div>

                    <div class="form-group">
                      <label>Fecha y Hora</label><br>
                      <input id="fe_marcaje" name= "fe_marcaje" type="text" class="form-control datemask" value="<?php echo $DateAndTime; ?>" readonly>
                    </div>

                  <div class="form-group">
                      <label>Actividad</label><br>
                      <?php echo $sel_actividades; ?>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Marcar Hora
                    </button>
                  </div>
                  </form>
                  </div>
                </div>