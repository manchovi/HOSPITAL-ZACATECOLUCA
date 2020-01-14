<!DOCTYPE html>
<html lang="es">
<head>
	<title>Historial de Información Sensores</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <!--  <link rel="icon" href="./favicon.ico" type="image/x-icon"> -->
   <link rel="shortcut icon" href="./assets/img/utla.png">
	
	<link type="text/css" rel="stylesheet" href="./css/estilo.css" />
    <!-- Bootstrap Core Css -->
    <link href="./plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="./plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="./plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="./plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="./css/style.css" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="./css/themes/all-themes.css" rel="stylesheet" />
	
	<link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./css/main.css"  rel="stylesheet" />

	<!--<script src="jquery-2.1.1.min.js"></script>-->
</head>
<body>

	<!-- SideBar -->
	<?php
		include("header.php");
	?>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<?php
			include("navbar.php");
		?>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Consulta <small>Lecturas de Sensores</small></h1>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<!-- <li class="active"><a href="#new" data-toggle="tab">New</a></li> -->
					<!-- <ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	
					  	<li class="active"><a href="#list" data-toggle="tab">Consulta General de Registros en la Base de Datos. </a></li>
					</ul> -->

					<div id="myTabContent" class="tab-content">
						<!-- <div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="">
									    	<div class="form-group label-floating">
											  <label class="control-label">Name</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
										      <label class="control-label">Status</label>
										        <select class="form-control">
										          <option>Active</option>
										          <option>Disable</option>
										        </select>
										    </div>
											<div class="form-group">
											  <label class="control-label">Start Date</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group">
											  <label class="control-label">End Date</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Amount</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
										        <label class="control-label">Year</label>
										        <select class="form-control">
										          <option>2017</option>
										          <option>2016</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div> -->


					  	<!-- <div class="tab-pane fade" id="list"> -->
						  <div class="tab-pane fade active in" id="list">
							<div class="table-responsive">
								<!-- <table class="table table-hover text-center"> -->
								<!-- <table class="table table-bordered table-striped table-hover dataTable js-exportable"> -->
								<table id="tabla" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th class="text-center"> N° </th>
											<th class="text-center">Temperatura</th>
											<th class="text-center">Humedad</th>
											<th class="text-center">Luminaria # 1</th>
											<th class="text-center">Luminaria # 2</th>
											<th class="text-center">Luminaria # 3</th>
											<th class="text-center">Luminaria # 4</th>
											<th class="text-center">Luminaria # 5</th>
											<th class="text-center">Luminaria # 6</th>
											<th class="text-center">Fecha - Hora</th>
										</tr>
									</thead>
									<tbody>

										<?php 
										include_once("conn.php");
										$conta = 1;
										$sql="SELECT * from sensores ORDER BY id_sensor DESC";
										//$sql="SELECT * from sensores ORDER BY id_sensor DESC LIMIT 5";
										$result=mysqli_query($conn,$sql);
										while($mostrar=mysqli_fetch_array($result)){
										?>
										<tr>
											<td><?php echo $conta++ ?></td>
											<td><?php echo $mostrar['temperatura'] ?></td>
											<td><?php echo $mostrar['humedad'] ?></td>
											<td><?php echo $mostrar['luz1'] ?></td>
											<td><?php echo $mostrar['luz2'] ?></td>
											<td><?php echo $mostrar['luz3'] ?></td>
											<td><?php echo $mostrar['luz4'] ?></td>
											<td><?php echo $mostrar['luz5'] ?></td>
											<td><?php echo $mostrar['luz6'] ?></td>
											<td><?php echo $mostrar['fecha'] ." ".  $mostrar['hora'] ?></td>
										</tr>
										
									<?php 
										}
									?>
										
									</tbody>
								</table>
								<!-- <ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul> -->
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer - Pie --> 
		<?php include("footer.php"); ?>

	</section>

	<!-- Notifications area -->

	<!-- Dialog help -->
	<?php
			include("dialoghelp.php");
	?>

	<!--====== Scripts -->
	<!-- <script src="./js/jquery-3.1.1.min.js"></script> -->
	<script src="./plugins/jquery/jquery.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<!-- <script src="./js/bootstrap.min.js"></script> -->
	<script src="./plugins/bootstrap/js/bootstrap.js"></script>
	<script src="./js/material.min.js"></script>
	

	<!-- Jquery Core Js -->
    <!-- <script src="./plugins/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap Core Js -->
    <!-- <script src="./plugins/bootstrap/js/bootstrap.js"></script> -->
    <!-- Select Plugin Js -->
    <script src="./plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="./plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="./plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="./plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="./plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <!-- Custom Js -->
    <script src="./js/admin.js"></script>
    <script src="./js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="./js/demo.js"></script>


	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<!-- <script>
		$.material.init();
	</script> -->
	<script>
          $(document).ready(function(){
              $('#tabla').DataTable();
          });
      </script>

</body>
</html>