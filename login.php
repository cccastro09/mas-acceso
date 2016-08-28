<?php
	session_start();
	include_once("loginDatos.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="copyright" content="+Acceso"> <!--Nombre de la compañia-->
	<meta name="organization" content="+Acceso" /> <!--Nombre de la Organizacion-->
	<meta name="generator" content="Notepad++"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
    <meta name="name" content="Inicio sesion">
    <meta name="description" content="Pagina de ingreso al sitio web">
    <meta name="author" content="Claudia Torres">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>+Acceso-Login</title>
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="css/tema.min.css">
 <link rel="stylesheet" href="css/login.css">

</head>
<body id="page-top">
    <nav id="mainNav" class="navbar-fixed-top">
              
           </nav>
		   
		   <div id="container">
		    <form class="form-login">
			<div class="form-group">
				<a  href="/">
			<img class="logo img-responsive" alt="Logo" src="img/logo.png">
			</a>
				<label id="user">Usuario:</label>
				<input type="text" id="usuario" name="usuario" placeholder="Digite su usuario">
				<label id="password">Contraseña:</label>
				<input type="text" id="contrasena" name="contrasena" placeholder="Digite su contraseña">
			</div>
				<button type="submit" class="btn btn-default">Login</button>
				<label  id="registroform">No estas registrado?, <a id="registro" href="registro.html">Registrate aqui</a></label>
			</form>
			</div>
			
</body>
</html>
