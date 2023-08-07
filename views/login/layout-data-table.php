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
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/assets/css/components.css">
</head>

	
<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
									<img src="<?php echo base_url();?>recursos//assets/images/logos - copia.png" alt="logo"
										width="129" class="shadow-light rounded-circle">
        <a href="#" class="navbar-brand sidebar-gone-hide"> Import-Export</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link">Import-Export</a></li> 
            <li class="nav-item"><a href="#" class="nav-link">Administrativo</a></li> 
			<li class="nav-item"><a href="#" class="nav-link">De Sistema</a></li> 
      <li class="nav-item"><a href="<?php echo site_url('inicio/layout_data_table'); ?>" class="nav-link">Cruds</a></li> 
      <li class="nav-item"><a target="_blank" href="<?php echo site_url('inicio/pdf_lista'); ?>" class="nav-link">PDF Listas</a></li> 

          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-1.png" class="rounded-circle">
            <div class="d-sm-none d-lg-inline-block">Hi, User Name</div></a>
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
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Modulos</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="index-0.html" class="nav-link">Import - Export</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Adminitracion</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">De Sistema</a></li>
              </ul>
            </li>

            
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Opciones</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="index-0.html" class="nav-link">Nuevo Numero de Control</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Consulta de Numero de Control</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Tablas Iniciales</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="index-0.html" class="nav-link">Empresa</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Cliente / Proveedor</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Livrason</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Camion</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Transport</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Season</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Compañia Aerea</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Embarquement</a></li>
              </ul>
            </li>
            
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Reportes</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="index-0.html" class="nav-link">Reporte 1</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Reporte 2</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Reporte 3</a></li>
              </ul>
            </li>
            
            
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DataTable: Consulta</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Consulta de Datos</h4>
              </div>
              <div class="card-body">
				  
<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4> 
					  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Task Name</th>
                            <th>Progress</th>
                            <th>Members</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                <div class="progress-bar bg-success" data-width="100%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                            </td>
                            <td>2018-01-20</td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Editar</button></td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                                <div class="progress-bar" data-width="0"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                            </td>
                            <td>2018-04-10</td>
                            <td><div class="badge badge-info">Todo</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                                <div class="progress-bar bg-warning" data-width="70%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                            </td>
                            <td>2018-01-29</td>
                            <td><div class="badge badge-warning">In Progress</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                <div class="progress-bar bg-success" data-width="100%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                              <img alt="image" src="<?php echo base_url();?>recursos/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                            </td>
                            <td>2018-01-16</td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>				  
				  
              </div>
              <div class="card-footer bg-whitesmoke">
               </div>
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

<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
		  
		      <div class="panel panel-default">
        <div class="panel-heading">Nueva Materia</div>
        <div class="panel-body">
<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-link">Reeet</button>
</form>

        </div>
    

		  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
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
  <script src="<?php echo base_url();?>recursos/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>recursos/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>recursos/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
	
  <!-- Page Specific JS File -->
<script src="<?php echo base_url();?>recursos/assets/js/page/modules-datatables.js"></script>
	
  <!-- Template JS File -->
  <script src="<?php echo base_url();?>recursos/assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>recursos/assets/js/custom.js"></script>
</body>
</html>
