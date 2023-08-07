<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('contenido/aulas/respuestas'); ?>">Respuestas</a></li>
			</ol>
		</div>
		<div class="col-sm-9">
			<ul class="nav nav-pills">
				<li><a class="btn panel-warning btn-sm" data-toggle="pill"
					href="#home"><span class="glyphicon glyphicon-th-list"></span></a></li>
<!--  				<li><a class="btn btn-info btn-sm" data-toggle="pill" href="#menu1"><span
						class="glyphicon glyphicon-search"></span></a></li> -->
				<li><a class="btn btn-success btn-sm" data-toggle="pill"
					href="#menu2"><span class="glyphicon glyphicon-list-alt"> / <span
							class="glyphicon glyphicon-plus"></span></a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-11 col-lg-12">
			<hr />
			<div class="tab-content">
				<div id="home" class="tab-pane fade in">
                    <?php echo $Lista; ?>
                </div>
				<div id="menu2" class="tab-pane fade in">
                    <?php echo $Nuevo; ?>
                </div>
			</div>
		</div>
	</div>

</div>
