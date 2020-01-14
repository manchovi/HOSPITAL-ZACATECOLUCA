<!DOCTYPE html>
<html lang="es">
<head>
	<title>Consulta x Intervalos de Tiempo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="./../favicon.ico" type="image/x-icon">
	
	<link type="text/css" rel="stylesheet" href="./../css/estilo.css" />
    <!-- Bootstrap Core Css -->
    <link href="./../plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="./../plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="./../plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="./../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="./../css/style.css" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="./../css/themes/all-themes.css" rel="stylesheet" />
	
	<link href="./../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./../css/main.css"  rel="stylesheet" />

	<!--<script src="jquery-2.1.1.min.js"></script>-->
</head>
<body>

	<!-- SideBar -->
	<?php
		include("./../header.php");
	?>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<?php
			include("./../navbar.php");
		?>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <!-- <h1 class="text-titles"> --><h3 class="text-primary"><i class="zmdi zmdi-print zmdi-hc-fw"></i>Filtrar Reporte por Fechas</h3>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
						<!-- <h3 class="text-primary">Filtrar Rango de Fechas</h3> -->
						<!-- <hr style="border-top:1px dotted #000;"/> -->
						<form class="form-inline" method="POST" action="print.php"  target="_blank">
						<div class="row"></div>
						<div class="row"></div>
						<div class="row">
							<hr style="border-top:1px dotted #000; width: 75%;"/>
							<h4 class="text-primary text-center">Seleccione Rango de Fechas</h4>
							<hr style="border-top:1px dotted #000; width: 75%;"/>
						</div>
			
							<table class="table table-responsive text-center" style="width: 80%; margin-left: 10%; margin-right: 10%;border-color: transparent;border-right-color: #01579B;">
								<tr>
									<td><label style="color: #000;font-size: 22px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desde:</label></td>
									<td><input type="date" class="form-control" placeholder="Start"  name="date1"/></td>
									<td><label style="color: #000; font-size: 22px;">Hasta</label></td>
									<td><input type="date" class="form-control" placeholder="End"  name="date2"/></td>
									<td><button class="btn btn-primary" name="print" type="submit"><span class="glyphicon glyphicon-print"></span></button></td>
								</tr>
							</table>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						</form>

						
						<div class="tab-pane fade active in" id="list">
							<div class="table-responsive">

							
							</div>
						  </div> 
					</div>
				</div>
			</div>
		</div>

		<!-- Footer - Pie --> 
		<?php include("./../footer.php"); ?>

	</section>

	<!-- Notifications area -->

	<!-- Dialog help -->
	<?php
			include("./../dialoghelp.php");
	?>

	<!--====== Scripts -->
	<!-- <script src="./js/jquery-3.1.1.min.js"></script> -->
	<script src="./../plugins/jquery/jquery.min.js"></script>
	<script src="./../js/sweetalert2.min.js"></script>
	<!-- <script src="./js/bootstrap.min.js"></script> -->
	<script src="./../plugins/bootstrap/js/bootstrap.js"></script>
	<script src="./../js/material.min.js"></script>
	

	<!-- Jquery Core Js -->
    <!-- <script src="./plugins/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap Core Js -->
    <!-- <script src="./plugins/bootstrap/js/bootstrap.js"></script> -->
    <!-- Select Plugin Js -->
    <script src="./../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="./../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="./../plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="./../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="./../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="./../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="./../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="./../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="./../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="./../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="./../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="./../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <!-- Custom Js -->
    <script src="./../js/admin.js"></script>
    <script src="./../js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="./../js/demo.js"></script>


	<script src="./../js/ripples.min.js"></script>
	<script src="./../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./../js/main.js"></script>
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