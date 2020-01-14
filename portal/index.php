<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Inicio Sesión</title>
    <!-- Favicon-->
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="shortcut icon" href="./assets/img/mysignals.png"> -->
    <link rel="shortcut icon" href="./assets/img/logo.png">

    <!-- Google Fonts 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    -->
    
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
    <link href="./css/stilos.css" rel="stylesheet">     <!-- Este es el css que pone el estilo de modal de error cuando user es incorrecto -->
    
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css IMPORTANT Css- aplica los estilos al LOGIN -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">

        <div class="logo">
            <a href="javascript:void(0);"><b>Login </b></a>
            <small text-color>Sistema IoT - Hospital Nacional Santa Teresa</small>
        </div>

        <div class="card">
            <div class="body">
              <!--   <form id="sign_in" method="POST" action="<?//=$_SERVER['PHP_SELF']?>"> -->
                <form id="sign_in" method="POST" action="check_login.php">
                    <!-- <div class="msg">Complete la Información Solicitada</div> -->
                    
                    <div class="row">
                        <div class="col-xs-12 align-center">
                            <img src="./assets/img/mysignals2.png" width="100px" height="100px">
                        </div>
                    </div> 	

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Enter your e-mail" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div> -->
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-grey waves-effect" type="submit"><i class="material-icons">person</i>&nbsp;&nbsp;&nbsp;INICIAR</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Registrarse Ahora!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Olvidó su Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container white-text">
        <small >Copyright &copy; 2019-2020. Hospital | Nacional Santa Teresa<br>Zacatecoluca</a>. Todos los derechos reservados</small>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

   <!--  <script src="js/sign-in.js"></script> -->

    <?php
    //isset($_POST["email"])
    if(isset($_REQUEST["error"])) {
    ?>
        <script>
            $(document).ready(function () {
                var errores = '<i class="material-icons blue">warning</i>¡Error!. Usuario y/o Contraseña son incorrectos.';
                // ENVIANDO MENSAJE ============================
                if (errores == '' == false) {
                    var mensajeModal = '<div class="modal_wrap">' + '<div class="mensaje_modal">' + '<h3><i class="material-icons blue-grey">close</i> Lo sentimos!!!</h3>' + errores + '<span id="btnClose">Cerrar</span>' + '</div>' + '</div>'
                    $('body').append(mensajeModal);
                }
                // CERRANDO MODAL ==============================
                $('#btnClose').click(function () {
                    $('.modal_wrap').remove();
                });
            });
        </script>

    <?php } ?>

    </body>
    </html>