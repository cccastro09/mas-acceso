<?php
session_start();
	ini_set('display_errors', 1);
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

	//include_once("Modelo/usuarioColector.php");
	use mas_acceso\usuario\usuarioColector;

	$UsuarioObj = new usuarioColector();

	//echo "id eliminar. ".$_GET["id"];

	if(isset($_GET["id"]))
	{
		$obj = $UsuarioObj->delete($_GET["id"]);
		//echo "Se elimino registro.";
		echo "<meta http-equiv='Refresh' content='0;/admin/usuario'>";
	}
	else
	{
		echo "Valor no encontrado.";
	}
?>
