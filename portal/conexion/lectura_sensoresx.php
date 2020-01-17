<!DOCTYPE html>
<html>
<head>
	<title>Tutorial ajax</title>
	<!--<meta charset="UTF-8">-->
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
	<script type="text/javascript" src="../jquery-2.1.1.js"></script>
	<!--<link rel="stylesheet" href="bootstrap.min.css"> -->	
	<script type="text/javascript">
		function mostrar(){
			$.ajax({
				//type:"GET",
				url:"conexion/lectura_sensores1.php",
				dataType: 'html',
				success:function(data){
					//console.log(data);
					var datos = JSON.parse(data);
					console.log(datos);
					var colorIcono = "";
					var colorFondo = "";
					var colorTexto = "";
					var fc = datos[0].frec_cardiaca;
					var sp = datos[0].spo2;
					var dc = datos[0].ta_diastolic;
					var sc = datos[0].ta_systolic;
					var pm = datos[0].ta_pulse_min;
					var fr = datos[0].frec_respiratoria;
					var tc = datos[0].temp_corporal;
					var alarma = datos[0].alarma;
					var fecha = datos[0].fecha;
					var hora = datos[0].hora;
					//console.log(fecha + '~' +hora);

					$("#tiempo").html("10.9");
					$("#fh_tiempo").html(fecha + '~' +hora);

					$("#spo2").html(sp);
					//$("#spo2_1").html(sp);
					$("#fh_spo2").html(fecha + '~' +hora);
					$("#fc").html(fc);
					//$("#fc_1").html(fc);
					$("#fh_fc").html(fecha + '~' +hora);
					$("#diastolic").html(dc);
					//$("#diastolic_1").html(dc);
					$("#fh_diastolic").html(fecha + '~' +hora);
					$("#systolic").html(sc);
					//$("#systolic_1").html(sc);
					$("#fh_systolic").html(fecha + '~' +hora);
					$("#heart").html(pm);
					//$("#heart_1").html(pm);
					$("#fh_heart").html(fecha + '~' +hora);
					$("#temperatura").html(tc);
					//$("#temperatura_1").html(tc);
					$("#fh_temperatura").html(fecha + '~' +hora);
					$("#temperatura1").html((Number(tc * 1.8)+32.0).toFixed(2));
					//$("#temperatura1_2").html((Number(tc * 1.8)+32.0).toFixed(2));
					$("#fh_temperatura1").html(fecha + '~' +hora);
					$("#respira").html(fr);
					//$("#respira_1").html(fr);
					$("#fh_respira").html(fecha + '~' +hora);
					//$("#fh_my").html(fecha + '~' +hora);

					//$("#alarmm").html(alarma);

					if(sp>=32){
						$("#spo2_ico").html("<img src=\"assets/img/9.png\" height=\"110\" width=\"110\" />");
					}else{
						$("#spo2_ico").html("<img src=\"assets/img/9.png\" height=\"110\" width=\"110\" />");
					}

					if(fc>=0){
						$("#fc_ico").html("<img src=\"assets/img/2.png\" height=\"110\" width=\"110\" />");
					}else{
						$("#fc_ico").html("<img src=\"assets/img/2.png\" height=\"110\" width=\"110\" />");
					}

					if(dc>=0){
						$("#diastolic_ico").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"110\" />");
					}else{
						$("#diastolic_ico").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"110\" />");
					}

					if(sc>=0){
						$("#systolic_ico").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"110\" />");
					}else{
						$("#systolic_ico").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"110\" />");
					}

					if(pm>=0){
						$("#heart_ico").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"110\" />");
					}else{
						$("#heart_ico").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"110\" />");
					}

					if(tc>36){
						$("#temperatura_ico").html("<img src=\"assets/img/termoo.png\" height=\"100\" width=\"80\" />");
						$("#temperatura1_ico").html("<img src=\"assets/img/termoo.png\" height=\"100\" width=\"80\" />");
					}else{
						$("#temperatura_ico").html("<img src=\"assets/img/termo.png\" height=\"100\" width=\"80\" />");
						$("#temperatura1_ico").html("<img src=\"assets/img/termo.png\" height=\"100\" width=\"80\" />");
					}

					if(fr>36){
						$("#respira_ico").html("<img src=\"assets/img/1.png\" height=\"110\" width=\"110\" />");
					}else{
						$("#respira_ico").html("<img src=\"assets/img/1.png\" height=\"110\" width=\"110\" />");
					}
					

					/* if(dc>=1){
						//$("#textofoco1").html("ON");
						$("#textofoco1").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"80\" />");
						$("#colorFondoF1").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF1").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						//$("#textofoco1").html("OFF");
						$("#textofoco1").html("<img src=\"assets/img/10.png\" height=\"100\" width=\"80\" />");
						$("#colorFondoF1").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF1").html("<i class=\"large material-icons white-text\">blur_off</i>");
					} */
					
					$("#fh_humedad").html(fecha + '~' +hora);
					$("#fh_tiempo").html(fecha + '~' +hora);
					$("#f1").html(fecha + '~' +hora);
					$("#f2").html(fecha + '~' +hora);
					$("#f3").html(fecha + '~' +hora);
					$("#f4").html(fecha + '~' +hora);
					$("#f5").html(fecha + '~' +hora);
					$("#f6").html(fecha + '~' +hora);
					$("#f7").html(fecha + '~' +hora);
					$("#f8").html(fecha + '~' +hora);
				}
			});
		}
		setInterval(mostrar,1000);
	</script>
</head>

<body>
	<!-- Carga de info-->
	
	<!--
		<div id="foco1"></div>
		<div id="imgf1"></div>
		<div id="foco2"></div>
		<div id="foco3"></div>
		<div id="foco4"></div>
		<div id="foco5"></div>
		<div id="foco6"></div>
		<div id="foco7"></div>
		<div id="foco8"></div>
		<div id="textofoco1"></div>
		<div id="fecha"></div>
		<div id="hora"></div>
		<div id="fh"></div>
	-->
       
</body>
</html>