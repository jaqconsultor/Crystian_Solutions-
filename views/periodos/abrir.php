

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Abrir Periodo</h4>
                  </div>
                  <form action="<?php echo site_url('sesiones/agregarperiodo'); ?>" method="post" name="id_formulario_1" id="id_formulario_1">
                  <div class="card-body">

                    <div class="form-group">
                      <label>Fecha Desde</label>
                      <input id="fe_desde" class="form-control datemask" type="date" name="fe_desde" step="1" min="2021-09-01" max="2099-12-31" value="2021-09-07">
                    </div>

                    <div class="form-group">
                      <label>Fecha Hasta</label>
                      <input id="fe_hasta" class="form-control datemask" type="date" name="fe_hasta" step="1" min="2021-09-01" max="2099-12-31" value="2021-09-07">
                    </div>

                  <div class="form-group">
                      <label>Obra</label><br>
                      <?php echo $sel_obras; ?>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Abrir
                    </button>
                    </form>
                  </div>
                  </div>
                </div>


