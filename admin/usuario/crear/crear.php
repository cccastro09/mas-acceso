<?php
	//include_once("../Modelo/usuarioColector.php");
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

	use mas_acceso\usuario\usuarioColector;
	$uCollector = new usuarioColector();
	$usuario = new usuario();
	$usuario_info = new usuario_info();

	if (!empty($_POST)) {
		if (empty($_POST['usuario']) || empty($_POST['password']) || empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['mail'])
			|| empty($_POST['sexo']) || empty($_POST['fecha_nacimiento']) || empty($_POST['pais']) || empty($_POST['tipo_discapacidad']) || empty($_POST['porcentaje_discapacidad']) || empty($_POST['rol']) ) {
			echo "Por favor ingrese los datos correctamente";
			//echo "usuario: ".$_POST['usuario']."  password: ".$_POST['password'];
			//echo "nombre: ".$_POST['nombre']."  apellido: ".$_POST['apellidos']."  mail: ".$_POST['mail']."  sexo: ".$_POST['sexo'] ;
			//echo "fecha: ".$_POST['fecha_nacimiento']."  pais: ".$_POST['pais']."  tipo: ".$_POST['tipo_discapacidad']."  porcentaje: ".$_POST['porcentaje_discapacidad']."  role: ".$_POST['rol'] ;

			echo "<meta http-equiv='Refresh' content='2;../../index.php'>";
		}
		else {
			//insertamos
			$usuario->setUsuario($_POST['usuario']);
			$usuario->setPassword($_POST['password']);
			//echo "usuario: ".$_POST['usuario']."  password: ".$_POST['password'];
			$usuarioInsertado = $uCollector->insertarUsuario($usuario);
			//echo "id: ".$usuarioInsertado->getId()."  ";

			$usuario_info->setNombre($_POST['nombre']);
			$usuario_info->setApellidos($_POST['apellidos']);
			$usuario_info->setMail($_POST['mail']);
			$usuario_info->setSexo($_POST['sexo']);
			$usuario_info->setFecha_nacimiento($_POST['fecha_nacimiento']);
			$usuario_info->setPais($_POST['pais']);
			$usuario_info->setTipodiscapacidad($_POST['tipo_discapacidad']);
			$usuario_info->setPorcentajediscapacidad($_POST['porcentaje_discapacidad']);
			$usuario_info->setRole($_POST['rol']);
			$usuario_info->setUsuario($usuarioInsertado->getId());


			//echo "  **nombre: ".$_POST['nombre']."  apellido: ".$_POST['apellidos']."  mail: ".$_POST['mail']."  sexo: ".$_POST['sexo'] ;
			//echo "fecha: ".$_POST['fecha_nacimiento']."  pais: ".$_POST['pais']."  tipo: ".$_POST['tipo_discapacidad']."  porcentaje: ".$_POST['porcentaje_discapacidad']."  role: ".$_POST['rol'] ;
			$uCollector->insertarUsuarioInfo($usuario_info);
			echo "     El usuario se ha agregado correctamente.";
			//echo "<meta http-equiv='Refresh' content='2;consultaSucursal.php'>";
			//echo "<meta http-equiv='Refresh' content='2;../../login.php'>";
		}
	}

?>
