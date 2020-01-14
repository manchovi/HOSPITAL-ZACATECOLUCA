<!DOCTYPE html>
<html lang="es">
<head>
	<title>Gráfica de Líneas Temperatura y Humedad Relativa</title>
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

	<script type="text/javascript" src="./js/Chart.bundle.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="./chart/Chart.min.css"> -->
	<!-- <script type="text/javascript" src="./chart/Chart.js"></script> -->
	 <!-- <script type="text/javascript" src="./chart/Chart.min.js"></script> -->


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
			  <h1 class="text-titles"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Gráfica de Líneas<small> -->Temperatura y Humedad Relativa. <a href="graficalinea.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a></small></h1>
			</div>
		</div>

		<?php

			include_once("conn.php");
			$temperatura = 'temperatura';
			$humedad = 'humedad';
			$fecha = 'fecha';
			$hora = 'hora';

			//query to get data from the table
			$sql = "SELECT * FROM `sensores`  ORDER BY id_sensor DESC LIMIT 10 ";
			$result = mysqli_query($conn, $sql);

			//loop through the returned data
			while ($row = mysqli_fetch_array($result)) {
				$temperatura = $temperatura . '"'. $row['temperatura'].'",';
				$humedad = $humedad . '"'. $row['humedad'] .'",';
				$fecha = $fecha . '"'. $row['fecha'] ."~" . $row['hora'] .'",';
				//$hora = $hora . '"'. $row['hora'] .'",';
			}

			$temperatura = trim($temperatura,"temperatura");
			$humedad = trim($humedad,"humedad");
			$fecha = trim($fecha,"fecha");

		?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12" > 
					<!--Inicio Gráfica Línea-->
					<canvas id="line_chart"></canvas>
					<script>
var div_line_chart = document.getElementById("line_chart");
var myLineChart = new Chart(div_line_chart, {
    type: 'line',
    data: {
        //labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul"],
		labels: [<?php echo $fecha; ?>],
        datasets: [
            {
                label: "Temperatura [°C]",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "red",
                //borderColor: "#357ebd",
				borderColor: "red",
                borderCapStyle: 'butt',
                //borderDash: [],
				borderDash: [5, 5],         //Define estilo de border descontinuo o de puntitos.
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                //pointBorderColor: "#3276B1",
				pointBorderColor: "blue",
                //pointBackgroundColor: "#3276B1",
				//pointBackgroundColor: 'rgba(255,150,0,0.5)',
				pointBackgroundColor: "blue",
                pointBorderWidth: 2,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "#3276B1",
                pointHoverBorderColor: "#3276B1",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
    			pointHitRadius: 30,
				pointStyle: 'rectRounded',
				//pointRadius: 1,
                pointHitRadius: 10,
                //data: [65, 59, 80, 81, 56, 55, 40],
				data: [<?php echo $temperatura; ?>],
            },
            {
                label: "Humedad Relativa [%]",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "green",
                //borderColor: "#357ebd",
				borderColor: "black",
                borderCapStyle: 'butt',
                //borderDash: [],
				borderDash: [5, 5],         //Define estilo de border descontinuo o de puntitos.
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                //pointBorderColor: "#3276B1",
				pointBorderColor: "green",
                //pointBackgroundColor: "#3276B1",
				//pointBackgroundColor: 'rgba(255,150,0,0.5)',
				pointBackgroundColor: "green",
                pointBorderWidth: 2,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "#3276B1",
                pointHoverBorderColor: "#3276B1",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
    			pointHitRadius: 30,
				pointStyle: 'rectRounded',
				//pointRadius: 1,
                pointHitRadius: 10,
                //data: [65, 59, 80, 81, 56, 55, 40],
				data: [<?php echo $humedad; ?>],
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
    }
});
</script>
					<!--Fin Gráfica Línea-->
				</div>
			</div>
		</div>

		<!-- Footer - Pie --> 
		<?php include("footer.php"); ?>

	</section>

	<!-- Notifications area -->

	<!-- Dialog help -->
	<?php include("dialoghelp.php"); ?>

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