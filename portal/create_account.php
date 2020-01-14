<!doctype html>
<html lang="en">
  <head>
    <title>Crear Cuenta</title>
    <link rel="shortcut icon" href="./assets/img/utla.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
<body>

<div class="container">

	<?php
	error_reporting(0);
	include 'conn.php';
	/* $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	} */
	
	$checkEmail = "SELECT * FROM usuarios WHERE email = '$_POST[email]' ";
	
	$result = $conn-> query($checkEmail);
	
	$count = mysqli_num_rows($result) > 0;
	
	if ($count == 1) {
	echo "<br />". "Ya existe un usuario con el correo especificado." . "<br />";
	echo "<a href='./index1.php'>Clic aqui para intentarlo nuevamente.</a>.";
	} else {	
	
	
	$user = $_POST['user'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	
	$query = "INSERT INTO usuarios (user, email, password) VALUES ('$user', '$email', '$passHash')";
	if (mysqli_query($conn, $query)) {
		/* echo "<div class='alert alert-success' role='alert'><h3>Your account has been created.</h3> */
		echo "<br><br><div class='alert alert-success' role='alert'><h3>Felicidades!!!. Cuenta Creada Correctamente.</h3>
		<a class='btn btn-outline-primary' href='./' role='button'>Iniciar Sesión</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>
</div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>