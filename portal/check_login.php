<?php
session_start();
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Monitor </title>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
  <body>  
  <div class="container">
	
  <?php
	//error_reporting(0);
	include 'conn.php';	
    if(isset($_POST["email"]) && ($_POST["password"])){ 
        $email = $_POST['email']; 
        $password = $_POST['password'];
        $result = mysqli_query($conn, "SELECT email, password, nombres, apellidos FROM tb_especialista WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);
        $hash = $row['password'];
        
        if (password_verify($_POST['password'], $hash)) {	
            
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $row['nombres'] . " " . $row['apellidos'];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;						
            
            /* echo "<br><br><div class='alert alert-success' role='alert'><strong><h2>Bienvenido!</strong> $row[user]</h2>			
                    <p><br><a href='mostrar1.php'>Consultar Datos</a></p>
            <p><a href='logout.php'>Cerrar Sesión</a></p></div>";	 */
            echo '<script>valor=confirm("Bienvenid@,\n'.$row['nombres'] . " " . $row['apellidos'].'");
                                    valor;
                                if (valor == true) {
                                    location.href="home1.php";
                                } 
                                </script>';
        } else {
            header("Location: ./?error");            
        }	
    }
?>

</div>


    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	</body>
</html>