<?php
	session_start();
	include_once("../Modelo/usuarioColector.php");
	$UsuarioObj = new usuarioColector();
	
	if(isset($_GET["id"]))
	{  
		$usuario = $UsuarioObj->consultarUsuarioPorId($_GET["id"]);
		$usuario_info = $UsuarioObj->consultarUsuarioInfoPorIdUsuario($_GET["id"]);
		
		$codigo = $_GET["id"];
		$usu = $usuario->getUsuario();
		$psw = $usuario->getPassword();
	
		$nombre = $usuario_info->getNombre();
		$apellido = $usuario_info->getApellidos();
		$email = $usuario_info->getMail();
		$sexo = $usuario_info->getSexo();
		$fecha = $usuario_info->getFecha_nacimiento();
		$pais = $usuario_info->getPais();
		$tipo = $usuario_info->getTipodiscapacidad();
		$porcentaje = $usuario_info->getPorcentajediscapacidad();
		$rol = $usuario_info->getRole();
	
	}
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
    <meta name="name" content="Editar">
    <meta name="description" content="Editar ingreso a la pagina">
    <meta name="author" content="Claudia Torres">

    <title>Editar</title>

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="css/tema.min.css">
	<link rel="stylesheet" href="../css/login.css">



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
        $('#fecha_nacimiento').datepicker();
    })
}
</script>
</head>
 
<body id="page-top">

       <a href="login.html">+ACCESO</a>     
   
	<div class="container">
	<form class="form-registro" action="editar.php" method="post">
	<div class="form-column">
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
		<label id="apellidos">Apellidos:</label>
		<input type="text" id="apellidos"  class="textbox" name="apellidos" placeholder="Apellidos" value="<?php echo $apellido; ?>" >
		<label id="nombre">Nombres:</label>
		<input type="text" id="nombre" class="textbox" name="nombre" placeholder="Nombres" value="<?php echo $nombre; ?>">
		<label id="user">Usuario:</label>
		<input type="text" id="usuario" class="textbox" name="usuario" placeholder="Usuario" value="<?php echo $usu; ?>">
		<label id="password">Contrase&ntilde;a:</label>
		<input type="password" id="password" class="textbox" name="password" placeholder="**********" value="<?php echo $psw; ?>">
		<label id="email">Correo Electr&oacute;nico:</label>
		<input type="text" id="mail" class="textbox" name="mail" placeholder="yyyyyy@yyyy.com" value="<?php echo $email; ?>">
	</div>
	<div class="form-column">
	<label id="genero_reg">G&eacute;nero</label>
		<select id="sexo" class="textbox" name="sexo" >
			<option>Masculino</option>
			<option>Femenino</option>
		</select>
		<label id="fecha-nac">Fecha de Nacimiento:</label>
		<input type="date" id="fecha_nacimiento" class="textbox" name="fecha_nacimiento" step="1" min="1950-01-01" max="2015-12-31" value="<?php echo $fecha; ?>">
		<label>Pa&iacute;s:</label>
		<select id="pais" class="textbox" name="pais" >
				<option value="Argentina">Argentina</option>
				<option value="Bolivia">Bolivia</option>
				<option value="Brasil">Brasil</option>
				<option value="Colombia">Colombia</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Cuba">Cuba</option>
				<option value="Chile">Chile</option>
				<option value="Ecuador">Ecuador</option>
				<option value="El Salvador">El Salvador</option>
				<option value="Guatemala">Guatemala</option>
				<option value="Haití">Hait&iacute;</option>
				<option value="Honduras">Honduras</option>
				<option value="México">México</option>
				<option value="Nicaragua">Nicaragua</option>
				<option value="Panamá">Panamá</option>
				<option value="Paraguay">Paraguay</option>
				<option value="Perú">Perú</option>
				<option value="República Dominicana">República Dominicana</option>
				<option value="Uruguay">Uruguay</option>
				<option value="Venezuela">Venezuela</option> 
		</select>
		<label>Tipo de Discapacidad:</label>
		<select id="tipo_discapacidad" class="textbox" name="tipo_discapacidad" >
				<?php
				foreach ($UsuarioObj->consultarDiscapacidadInfo() as $tipo_discapacidad) {
					$d_id = $tipo_discapacidad->getId();  
					$d_tipo = $tipo_discapacidad->getTipo();
				?>
					<option value= "<?php echo $d_id ?>" > <?php echo  $d_tipo ?> </option>
				<?php
				}?>
		</select>
		<label>Porcentaje de Discapacidad:</label>
		<select id="porcentaje_discapacidad" class="textbox" name="porcentaje_discapacidad" >
				<option value="10%">10%</option>
				<option value="porcentaje2">20%</option>
				<option value="porcentaje3">30%</option>
				<option value="porcentaje4">40%</option>
		</select>
		<label>Rol:</label>
		<select id="rol" class="textbox" name="rol" value="<?php echo $rol; ?>">
				<?php
					foreach ($UsuarioObj->consultarRol() as $rol) {
						$r_id = $rol->getId();  
						$r_nombre = $rol->getNombre();
				?>
					<option value= "<?php echo $r_id ?>" > <?php echo  $r_nombre ?> </option>
				<?php
				}?>
		</select>
	</div>
	<div class="cbp-mc-submit-wrap"><input class="boton-enviar" type="submit" value="Editar" /></div>
</form>
</div>

</body>

</html>