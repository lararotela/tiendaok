<?php
include 'templates/cabecera.php';
?>
<br>
<?php
//echo "Hola soy  index  en modulos";

if(isset($_POST['btnLogin'])){
//el print_r imprime la información en email y password.

    include("global/conexion.php");

    $txtEmail= ($_POST['txtEmail']);
    $txtPassword= ($_POST['txtPassword']);

    $sentenciaSQL=$pdo->prepare("SELECT * FROM tblusuarios 
    WHERE correo=:correo 
    AND password=:password");

    $sentenciaSQL->bindParam("correo",$txtEmail,PDO::PARAM_STR);
    $sentenciaSQL->bindParam("password",$txtPassword,PDO::PARAM_STR);
    $sentenciaSQL ->execute();

    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    print_r($registro);
    
    

    $numeroRegistros=$sentenciaSQL->rowCount();

    if ( $numeroRegistros>=1){

    session_start(); //es para validar que hay un usuario conectado y poder ingresar en ventas productos, panel.
    $_SESSION['usuario']=$registro;
    
        echo "Bienvenido...";
        header('Location:index.php');

    }else{
        echo "No se encontraron registros";
    }




}

?>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>NeaInformatica</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>


<br>
<br>
<br>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<div class="container-login100">

  <body class="hold-transition login-page">
  <div class="login-box">
    
    <!-- /.login-logo -->
    
    <section class="section justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact-details">
                            <h3>Bienvenido!!!</h3>
                            <p>Por favor, complete el formulario para generar su cuenta.</p>

                            <p>Use la información real.</p>

                            <hr>

                            <h5>Su Información permanecera privada</h5>
                            <hr>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <form role="form" class="contactform">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Correo" required>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="txtPassword" class="form-control" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="txtPassword" class="form-control" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" required>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" name="btnLogin" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                            </div>
                            
                        </form>

                    </div><!-- end col -->

  
</body>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>
 <h5><a href="index.php">Volver</a></h5>
</body>

<br>
<br>
<br>


<?php
include 'templates/pie.php'
?>