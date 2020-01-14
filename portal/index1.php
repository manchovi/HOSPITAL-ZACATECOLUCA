<!doctype html>
<html lang="en">
  <head>
    <title>Create an account or Login</title>
	<link rel="shortcut icon" href="./assets/img/utla.png">
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/custom.css"> -->
  </head>
  <body>
  
  <br>
  <div class="container">
		<div class="row" align='center'>
			<div class="col-sm-12">
				<h1>Portal UTLA - Sistema de Monitoreo</h1>
				<!-- <img src="img/logo_small.png"> -->
				<img src="assets/img/icon.png" width="100px" height="100px">
		</div>	
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>Crear Cuenta Usuario</h3><hr />
		
		<form action="create_account.php" method="POST">
			<div class="form-group">				
				<input type="text" class="form-control" name="user" placeholder="Introduzca Nombre Completo" required>			
		  </div>
		  
		  <div class="form-group">				
				<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Introduzca su Correo" required>
			</div>
		  
		  <div class="form-group">				
				<input type="password" class="form-control" name="password" placeholder="Introduzca Contraseña" required>
			</div>
		  
		  <button type="submit" class="btn btn-success btn-block">Crear Cuenta</button>
		</form>		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Inicio de Sesión</h3><hr />
			<p>Ya tiene cuenta? <a href="./" title="Loguearse Aqui">Loguearse Aqui</a></p>
		</div>
	</div>
</div>

<script src="js/jquery-3.2.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->
 
	</body>
</html>