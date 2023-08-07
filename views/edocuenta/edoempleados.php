
<div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Estado de Cuenta</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>

   <?php 
      if ( isset( $tx_cabecera ) ) {
        echo $tx_cabecera; 
      }
   ?>


                        </tr>
                      </thead>
                      <tbody>
                        
        <?php 
      if ( isset( $tx_datos ) ) {
        echo $tx_datos; 
      }
   ?>
                          
                        
                      </tbody>
                    </table>
                  </div>
                </div>
</div>