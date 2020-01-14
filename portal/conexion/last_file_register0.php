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
				url:"conexion/last_file_register.php",
				dataType: 'html',
				success:function(data){
					//console.log(data);
					var datos = JSON.parse(data);
					//console.log(datos.length);    //Me muestra la cantidad de registros a recorrer
					//console.log("Manuel");        //Me muestra un texto cualquiera.
					//console.log(data);            //Me muestra toda la data consultada.
					var id="";
					var fc="";
					var spo2="";
					var dc="";
					var sc="";
					var pm="";
					var fr="";
					var tempe_c="";var tempe_f="";
					var tempe="";
					var alarma="";
					var fechahora="";
					for(var i=0;i<datos.length;i++){
						id = id + datos[i].id+"<br>";
						fc = fc + datos[i].frec_cardiaca+"<br>";
						spo2 = spo2 + datos[i].spo2+"<br>";
						dc = dc + datos[i].ta_diastolic+"<br>";
						sc = sc + datos[i].ta_systolic+"<br>";
						pm = pm + datos[i].ta_pulse_min+"<br>";
						fr = fr + datos[i].frec_respiratoria+"<br>";
						tempe = tempe + datos[i].temp_corporal + "°C~" + (Number((datos[i].temp_corporal * 1.8)+32.0).toFixed(2))+"°F<br>";
						alarma = alarma + datos[i].alarma+"<br>";
						fechahora = fechahora + datos[i].fecha+ "~" + datos[i].hora+"<br>";
						console.log(datos[i].id);
					}

					$("#id_1").html(id);
					$("#frec_cardiaca_1").html(fc);
					$("#spo2_1").html(spo2);
					$("#diastolic_1").html(dc);
					$("#systolic_1").html(sc);
					$("#heart_1").html(pm);
					$("#respira_1").html(fr);
					$("#temperatura_1").html(tempe);
					$("#alarma_1").html(alarma);
					$("#fechahora_1").html(fechahora);
				}
			});
		}
		setInterval(mostrar,1000);
	</script>
</head>

<body>
	<!-- Carga de info-->
	<!-- <p id="id" class="full-box"></p>
	<p id="temperatura" class="full-box"></p> -->
		
	<!-- <div id="resultado_aqui" style="background-color: rgb(163, 228, 215);
		color: rgb(0, 0, 0);border: 2px solid rgb(7, 108, 151);height: 200px;">
	</div> -->
		
       
</body>
</html>