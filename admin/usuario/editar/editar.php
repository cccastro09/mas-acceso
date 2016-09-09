<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

//include_once("Modelo/usuarioColector.php");
use mas_acceso\usuario\usuarioColector;
use mas_acceso\usuario\UsuarioClass;
use mas_acceso\usuario\UsuarioInfoClass;

	$uCollector = new usuarioColector();
	$usuario = new UsuarioClass();
	$usuario_info = new UsuarioInfoClass();

	if (!empty($_POST)) {
		if (empty($_POST['usuario']) || empty($_POST['password']) || empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['mail'])
			|| empty($_POST['sexo']) || empty($_POST['fecha_nacimiento']) || empty($_POST['pais']) || empty($_POST['tipo_discapacidad']) || empty($_POST['porcentaje_discapacidad']) || empty($_POST['rol']) ) {
			//echo "Por favor ingrese los datos correctamente";

			echo "<meta http-equiv='Refresh' content='0;/admin/usuario'>";
		}
		else {
			//actualizamos
			$codigo = $_POST['codigo'];
			$usuario->setId($codigo);
			$usuario->setUsuario($_POST['usuario']);
			$usuario->setPassword($_POST['password']);
			//echo "usuario: ".$_POST['usuario']."  password: ".$_POST['password']."  codigo:".$codigo;
		$uCollector->updateUser($usuario);


			$usuario_info->setNombre($_POST['nombre']);
			$usuario_info->setApellidos($_POST['apellidos']);
			$usuario_info->setMail($_POST['mail']);
			$usuario_info->setSexo($_POST['sexo']);
			$usuario_info->setFecha_nacimiento($_POST['fecha_nacimiento']);
			$usuario_info->setPais($_POST['pais']);
			$usuario_info->setTipodiscapacidad($_POST['tipo_discapacidad']);
			$usuario_info->setPorcentajediscapacidad($_POST['porcentaje_discapacidad']);
			$usuario_info->setRole($_POST['rol']);
			$usuario_info->setUsuario($codigo);


			//echo "nombre:".$_POST['nombre']."  apellido:".$_POST['apellidos']."  mail:".$_POST['mail']."  sexo:".$_POST['sexo'] ;
			//echo "fecha:".$_POST['fecha_nacimiento']."  pais:".$_POST['pais']."  tipo:".$_POST['tipo_discapacidad']."  porcentaje:".$_POST['porcentaje_discapacidad']."  role:".$_POST['rol'] ;

			//echo "nombre:".$usuario_info->getNombre()."  apellido:".$usuario_info->getSexo();

			$uCollector->updateUsuarioInfo($usuario_info);
			//echo "     El usuario se ha editado correctamente.";
			echo "<meta http-equiv='Refresh' content='0;/admin/usuario'>";

		}
	}
?>
