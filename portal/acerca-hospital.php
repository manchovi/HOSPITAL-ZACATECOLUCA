<!DOCTYPE html>
<html lang="es">
<head>
	<title>Acerca UTLA</title>
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
			  <!-- <h1 class="text-titles"> --><h3 class="text-primary"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Información de Contacto & Ubicación<br>HNSTZ ~
												Hospital Nacional General "Santa Teresa", Zacatecoluca</h3>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
						
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.6633367929094!2d-89.28832338568907!3d13.678223902680665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632eff12776b2d%3A0xc41fb364f0d06916!2sUniversidad%20T%C3%A9cnica%20Latinoamericana%20EDIFICIO%20A-B-C-D!5e0!3m2!1ses-419!2ssv!4v1578427354987!5m2!1ses-419!2ssv" 
					width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true">
				</iframe> -->

				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15517.20409098961!2d-88.8675464!3d13.5171091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1dd05dea1d6b64f8!2sHospital%20Nacional%20Santa%20Teresa%2C%20Av.%20Juan%20Manuel%20Rodr%C3%ADguez%2C%20Zacatecoluca!5e0!3m2!1ses!2ssv!4v1578951627699!5m2!1ses!2ssv" 
					width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
				</iframe>
						
				<!-- <p class="full-box" id="textofoco5">hola</p> -->
				<h1 class="text-titles">Contacto: </h1>
				<h3 class="text-titles"><strong>Dirección:</strong> Final Avenida Juan Manuel Rodríguez Calle al Volcán, Zacatecoluca, El Salvador, C.A. 
				                                                    Atención Emergencias 24 horas Atención al Publico de 7:30 a.m.- 3:30 p.m. (Horario ininterrumpido)</h3>

				<h3 class="text-titles"><strong>Teléfono(s):</strong> (503) 2347-1200 Fax: (503) 2347-1213</h3>

				<h3 class="text-titles"><strong>Correo Electrónico: </strong>oir@salud.gob.sv</h3>

				<h3 class="text-titles"><strong>Horario de atención: </strong><br>Lunes de 07:30 a 03:30<br>
																				Martes de 07:30 a 03:30<br>
																				Miércoles de 07:30 a 03:30<br>
																				Jueves de 07:30 a 03:30<br>
																				Viernes de 07:30 a 03:30</h3>

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