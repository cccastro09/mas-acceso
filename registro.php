<?php
	session_start();
	include_once("registroDatos.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="application-name" content="Informacion sobre el nivel de accesibilidad de infraestructuras">
	<meta name="copyright" content="+Acceso"> <!--Nombre de la compañia-->
	<meta name="organization" content="+Acceso" /> <!--Nombre de la Organizacion-->
	<meta name="generator" content="Notepad++"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
    <meta name="name" content="Registro">
    <meta name="description" content="Registro para ingreso a la pagina">
    <meta name="author" content="Claudia Torres">

    <title>Registro</title>

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="css/tema.min.css">
 <link rel="stylesheet" href="css/login.css">



<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
    }
</script>
<script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#calendario').datepicker();
    })
}
</script>
</head>
 
<body id="page-top">

       <a href="login.html">+ACCESO</a>     
   
	<div class="container">
	<form class="form-registro">
	<div class="form-column">
		<label id="apellidos">Apellidos:</label>
		<input type="text" id="apellido"  class="textbox" name="apellido" placeholder="Apellidos">
		<label id="nombre">Nombres:</label>
		<input type="text" id="nombres" class="textbox" name="nombres" placeholder="Nombres">
		<label id="user">Usuario:</label>
		<input type="text" id="usuario" class="textbox" name="usuario" placeholder="Usuario">
		<label id="password">Contrase&ntilde;a:</label>
		<input type="password" id="contrasena" class="textbox" name="contrasena" placeholder="**********">
		<label id="confirmar-contrasena">Confirmar Contrase&ntilde;a:</label>
		<input type="password" id="conf-contrasena" class="textbox" name="conf-contrasena" placeholder="*********">
		<label id="email">Correo Electr&oacute;nico:</label>
		<input type="text" id="correo" class="textbox" name="correo" placeholder="yyyyyy@yyyy.com">
	</div>
	<div class="form-column">
	<label id="genero_reg">G&eacute;nero</label>
		<select id="genero" class="textbox" name="genero">
			<option>Masculino</option>
			<option>Femenino</option>
		</select>
		<label id="fecha-nac">Fecha de Nacimiento:</label>
		<input type="date" id="calendario" class="textbox" name="nacimiento" step="1" min="1950-01-01" max="2015-12-31" value="2016-07-13">
		<label>Pa&iacute;s:</label>
		<select id="pais" class="textbox" name="pais">
				<option value="pais1">Argentina</option>
				<option value="pais2">Bolivia</option>
				<option value="pais3">Brasil</option>
				<option value="pais4">Colombia</option>
				<option value="pais5">Costa Rica</option>
				<option value="pais6">Cuba</option>
				<option value="pais7">Chile</option>
				<option value="pais8">Ecuador</option>
				<option value="pais8">El Salvador</option>
				<option value="pais10">Guatemala</option>
				<option value="pais11">Haití</option>
				<option value="pais12">Honduras</option>
				<option value="pais13">México</option>
				<option value="pais14">Nicaragua</option>
				<option value="pais15">Panamá</option>
				<option value="pais16">Paraguay</option>
				<option value="pais17">Perú</option>
				<option value="pais18">República Dominicana</option>
				<option value="pais19">Uruguay</option>
				<option value="pais20">Venezuela</option> 
		</select>
		<label>Tipo de Discapacidad:</label>
		<select id="tipo-discapacidad" class="textbox" name="tipo-discapacidad">
				<option value="tipo1">F&iacute;sica</option>
				<option value="tipo2">Cognitiva</option>
				<option value="tipo3">Sensorial</option>
				<option value="tipo4">Intelectual</option>
		</select>
		<label>Porcentaje de Discapacidad:</label>
		<select id="porc-discapacidad" class="textbox" name="porc-discapacidad">
				<option value="porcentaje1">10%</option>
				<option value="porcentaje2">20%</option>
				<option value="porcentaje3">30%</option>
				<option value="porcentaje4">40%</option>
		</select>
	</div>
	<div class="cbp-mc-submit-wrap"><input class="boton-enviar" type="submit" value="Registrar" /></div>
</form>
</div>

</body>

</html>