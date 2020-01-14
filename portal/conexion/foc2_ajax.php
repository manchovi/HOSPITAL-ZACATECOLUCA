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
				url:"conexion/datofoco2ajax.php",
				dataType: 'html',
				success:function(data){
					//console.log(data);
					var datos = JSON.parse(data);
					console.log(datos);

					var colorIcono = "";
					var colorFondo = "";
					var colorTexto = "";

					var temperatura = datos[0].temperatura;
					var humedad = datos[0].humedad;
					var luz1 = datos[0].luz1;
					var luz2 = datos[0].luz2;
					var luz3 = datos[0].luz3;
					var luz4 = datos[0].luz4;
					var luz5 = datos[0].luz5;
					var luz6 = datos[0].luz6;
					var luz7 = datos[0].luz7;
					var luz8 = datos[0].luz8;
					var fecha = datos[0].fecha;
					var hora = datos[0].hora;

					$("#temperatura").html(temperatura);
					$("#humedad").html(humedad);

					$("#tiempo").html("10.9");
					

					if(luz1==1){
						$("#textofoco1").html("ON");
						//$("#textofoco1").html("<img src=\"assets/img/encen1.png\" height=\"100\" width=\"80\" />");
						$("#colorFondoF1").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF1").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						$("#textofoco1").html("OFF");
						//$("#textofoco1").html("<img src=\"assets/img/apaga.png\" height=\"100\" width=\"80\" />");
						$("#colorFondoF1").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF1").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}

					if(luz2==1){
						$("#textofoco2").html("ON");
						$("#colorFondoF2").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF2").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						$("#textofoco2").html("OFF");
						$("#colorFondoF2").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF2").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}

					if(luz3==1){
						$("#textofoco3").html("ON");
						$("#colorFondoF3").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF3").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						$("#textofoco3").html("OFF");
						$("#colorFondoF3").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF3").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}

					if(luz4==1){
						$("#textofoco4").html("ON");
						$("#colorFondoF4").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF4").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						$("#textofoco4").html("OFF");
						$("#colorFondoF4").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF4").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}

					if(luz5==1){
						$("#textofoco5").html("ON");
						$("#colorFondoF5").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF5").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");	
					}else{
						$("#textofoco5").html("OFF");
						$("#colorFondoF5").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF5").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}

					if(luz6==1){
						$("#textofoco6").html("ON");
						$("#colorFondoF6").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF6").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						$("#textofoco6").html("OFF");
						$("#colorFondoF6").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF6").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}

					if(luz7==1){
						$("#textofoco7").html("ON");
						$("#colorFondoF7").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF7").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						$("#textofoco7").html("OFF");
						$("#colorFondoF7").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF7").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}

					if(luz8==1){
						$("#textofoco8").html("ON");
						$("#colorFondoF8").html("<i class=\"grey darken-4 full-box tile-icon text-center\"></i>");
						$("#coloryNameIconF8").html("<i class=\"large material-icons yellow-text\">blur_on</i></i>");
					}else{
						$("#textofoco8").html("OFF");
						$("#colorFondoF8").html("<i class=\"grey darken-3 full-box tile-icon text-center\">");
						$("#coloryNameIconF8").html("<i class=\"large material-icons white-text\">blur_off</i>");
					}
					

					$("#fh_temperatura").html(fecha + '~' +hora);
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