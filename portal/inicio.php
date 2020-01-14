<?php 

	$conexion=mysqli_connect('localhost','root','','request');

 ?>


<!doctype html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>
	<p><a href='logout.php'>Logout</a></p>
	<table border="1" >
		
		<td colspan="9" align=center >Temperatura y Humedad Relativa Asi Como el Monitoreo de Luminaria del Laboratorio de Electronica</td>
			<tr>
			<td>Temperatura</td>
			<td>Humedad</td>
			<td>Lampara 1</td>	
			<td>Lampara 2</td>
			<td>Lampara 3</td>
			<td>Lampara 4</td>	
			<td>Lampara 5</td>	
			<td>Lampara 6</td>	
			<td>Hora y Fecha</td>	
		</tr>

		<?php 



	header("Refresh:10");

		$sql="SELECT * from request";
		
		$result=mysqli_query($conexion,$sql);
	

		while($mostrar=mysqli_fetch_array($result)){
			
		 ?>
	 

		<tr>
		

		
		
			<td><?php echo $mostrar['request'] ?></td>
			<td><?php echo $mostrar['Humedad'] ?></td>
			<td><?php echo $mostrar['Lampara'] ?></td>
			<td><?php echo $mostrar['Lampara2'] ?></td>
			<td><?php echo $mostrar['Lampara3'] ?></td>
			<td><?php echo $mostrar['Lampara4'] ?></td>
			<td><?php echo $mostrar['Lampara5'] ?></td>
			<td><?php echo $mostrar['Lampara6'] ?></td>
			<td><?php echo $mostrar['Fecha'] ?></td>
		</tr>
		
	<?php 
	
	}
	 ?>

	</table>

</body>
		
</html>