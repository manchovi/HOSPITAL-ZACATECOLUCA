<!DOCTYPE html>
<html lang="es">
<head>
	<title>Acerca Autores</title>
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
			  <!-- <h1 class="text-titles"> --><h3 class="text-primary"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Autor<small> -->About</small></h3>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 align-center">
						
				<!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
                    <div class="card" style="height: 900px; ">
                        <div class="body align-center" style="margin: 25px;">
                            <div id="donut_chart" class="dashboard-donut-chart">
							<h4 class="text-primary text-center"><<<< Información >>>></h4>
							<hr style="border-top:1px dotted #000;"/>
							<div class="row"></div>
							<figure class="full-box text-center"><img src="./assets/img/foto.png" alt="UserIcon" width=25% height=25%>
								<figcaption class="text-center text-titles">Autor</figcaption>
							</figure>
							<div class="row"></div>
							<p class="text-left">* Nombre: Manuel de Jesús Gámez López</p>
							<p class="text-left">* Teléfono: (+503)6110-7065</p>
							<p class="text-left">* E-mail: manuel.gamez@itca.edu.sv</p>
							<div class="row"></div>
							<div class="row"></div>
							<div class="row"></div>
							<p class="text-left">* Estudios: </p>
							<div class="row"></div>
							<div class="row"></div>
							<div class="row"></div>
							</div>
                        </div>
                    </div>
                </div>
				<!-- #END# Browser Usage -->
				

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