<?php 
include_once('registroClass.php');
//include_once(''); --> collector para configurar la conexion a la base

class registroDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM Registro ORDER BY id_registro");
		$arrayRegisgtro = array();
		foreach ($rows as $c){
			$aux = new registroClass($c{'id_registro'},$c{'apellidos'},$c{'nombres'},$c{'usuario'},$c{'contrasena'},$c{'confContrasena'},$c{'email'},$c{'genero'},$c{'fechaNacimiento'},$c{'pais'},$c{'tipoDiscapacidad'},$c{'porcentajeDiscapacidad'});
			array_push($arrayRegisgtro, $aux);
		}	
		return $arrayRegisgtro;
	}
}
?>
