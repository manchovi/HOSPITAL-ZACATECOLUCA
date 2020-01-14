<!doctype html>
<html lang="en">
  <head>
    <title>Monitor</title>
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
			<h2>Log in - Portal</h2>
				<!-- <img src="img/logo_small.png"> -->
				<img src="./assets/img/ser.png" width="100px" height="100px">
		</div>	
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">		
				<div class="card">
					<div class="loginBox">
												<h2></h2>
				
						<form action="check_login.php" method="post">                           	
							<div class="form-group">									
							<input type="email" class="form-control input-lg" name="email" placeholder="Email" required>        
							</div>							
							<div class="form-group">        
							<input type="password" class="form-control input-lg" name="password" placeholder="Password" required>       
							</div>								    
							<button type="submit" class="btn btn-success btn-block">Log in</button>        
							<br>
						</form>						
						<hr><p>Nuevo Usuario? <a href="index1.php" title="Create an account">Crear Nueva Cuenta</a>.</p>								
					</div><!-- /.loginBox -->	
				</div><!-- /.card -->
			</div><!-- /.col -->
		</div><!--/.row-->
	</div><!-- /.container -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	</body>

</html>