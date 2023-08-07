<?php ?>

<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="<?php echo site_url('inicio/layoutBlank'); ?>" class="navbar-brand sidebar-gone-hide"> 
        <!--
        <img src="<?php //echo base_url();?>recursos\assets\images/logos - copia.png" alt="logo"
										width="100" class="shadow-light rounded-circle">
        -->
        Crystian Solutions</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
<!--            <li class="nav-item"><a href="#" class="nav-link">Import-Export</a></li> 
            <li class="nav-item"><a href="#" class="nav-link">Administrativo</a></li> 
            <li class="nav-item"><a href="#" class="nav-link">De Sistema</a></li> 
-->  
<!--			<li class="nav-item"><a href="<?php //echo site_url('inicio/layout_data_table'); ?>" class="nav-link">Cruds</a></li> 
      <li class="nav-item"><a href="<?php //echo site_url('inicio/pdf_lista'); ?>" class="nav-link">PDF Listas</a></li> 
-->
        <!--
        <li class="nav-item"><a href="<?php //echo site_url('inicio/pdf_lista'); ?>" class="nav-link">PDF Listas</a></li>
          </ul>
        </div>
        -->
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-1.png" class="rounded-circle">
            <div class="d-sm-none d-lg-inline-block"> User Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
              <a href="<?php echo site_url('inicio/index'); ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">

            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Marcar Horario</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="<?php echo site_url('marcar/marcar'); ?>" class="nav-link">Marcar</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
