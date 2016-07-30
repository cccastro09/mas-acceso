<?php 
include_once('loginClass.php');
//include_once(''); --> collector para configurar la conexion a la base

class loginDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM Usuario ORDER BY id_usuario");
		$arrayLogin = array();
		foreach ($rows as $c){
			$aux = new loginClass($c{'id_usuario'},$c{'usuario'},$c{'password'});
			array_push($arrayLogin, $aux);
		}	
		return $arrayLogin;
	}
}
?>
