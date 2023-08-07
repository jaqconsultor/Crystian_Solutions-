<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/assets/css/components.css">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">

    <!-- Barra de Navegacion -->
    <?php 
      if ( isset( $menu ) ) {
        echo $menu; 
      }
   ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Crystian Solutions</h1>
          </div>

          <div class="section-body">
            <div class="card">
<!--              <div class="card-header">
                Version Web 1.0.0
              </div>
-->
              <div class="card-body">

              <?php 
                if ( isset( $cuerpo ) ) {
                  echo $cuerpo; 
                }
              ?>

              <?php 
                if ( isset( $datos_id_institucion ) ) {
              ?>

               <section class="section">
                  <div class="section-header">
                    <h2><?php echo $titulo; ?></h2>
                  </div>
                    <?php echo $datos_id_institucion; ?>
                    <hr>
                </section>

              <?php
                }
              ?>

              </div>
<!--              <div class="card-footer bg-whitesmoke">
                Section Work Footer
              </div> -->
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">By Programmers</a>
        </div>
        <div class="footer-right">
          <strong>Version 1.0.0</strong>
        </div>
      </footer>
    </div>
  </div>

 

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url();?>recursos/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?php echo base_url();?>recursos/assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>recursos/assets/js/custom.js"></script>
</body>
</html>
