<!DOCTYPE html>
<html lang="es">
<head>
	<title>Consulta x Intervalos de Tiempo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <link rel="icon" href="./favicon.ico" type="image/x-icon"> -->
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
			  <!-- <h1 class="text-titles"> --><h3 class="text-primary"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Filtrar Rango de Fechas<small> -->Histórico de Información en la Base de Datos.</small></h3>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
						<!-- <h3 class="text-primary">Filtrar Rango de Fechas</h3> -->
						<!-- <hr style="border-top:1px dotted #000;"/> -->
						<form class="form-inline" method="POST" action="">
							<table class="table table-responsive text-center" style="width: 80%; margin-left: 10%; margin-right: 10%;border-color: transparent;border-right-color: #01579B;">
								<tr>
									<td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desde:</label></td>
									<td><input type="date" class="form-control" placeholder="Start"  name="date1"/></td>
									<td><label>Hasta</label></td>
									<td><input type="date" class="form-control" placeholder="End"  name="date2"/></td>
									<td><button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> <a href="consulta2.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a></td>
								</tr>
							</table>
						</form>

						
						<div class="tab-pane fade active in" id="list">
							<div class="table-responsive">

							<!-- <table class="table table-bordered"> -->
							<table class="table table-hover text-center">
								<!-- <thead class="alert-info"> -->
								<thead>
                                        <tr>
											<th class="text-center">#</th>
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
                                    <tfoot>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">°C ~ °F</th>
											<th class="text-center">Relativa [%]</th>
											<th class="text-center">Status # 1</th>
											<th class="text-center">Status # 2</th>
											<th class="text-center">Status # 3</th>
											<th class="text-center">Status # 4</th>
											<th class="text-center">Status # 5</th>
											<th class="text-center">Status # 6</th>
											<th class="text-center">Time</th>
										</tr>
                                    </tfoot>


								<tbody class="text-center">
									<?php include'range.php'?>	
								</tbody>

							</table>

								<!-- <table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Student</th>
											<th class="text-center">Amount</th>
											<th class="text-center">Subscription</th>
											<th class="text-center">Pending</th>
											<th class="text-center">Date</th>
											<th class="text-center">Period</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Carlos Alfaro</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Claudia Rodriguez</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>1</td>
											<td>Alicia Melendez</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>1</td>
											<td>Sarai Mercado</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>-->
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