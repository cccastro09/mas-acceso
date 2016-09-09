<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

//include_once("Modelo/usuarioColector.php");

use mas_acceso\usuario\usuarioColector;
use mas_acceso\usuario\UsuarioClass;
use mas_acceso\util\Functions as fn;

//use mas_acceso\usuario\Discapacidades\CollectorDiscapacidad;

$UsuarioObj = new usuarioColector();
$usuario = new UsuarioClass();

//$discapacdadObjeto = new CollectorDiscapacidad();

if (!empty($_POST)) {
  if (empty($_POST['usuario']) || empty($_POST['contrasena'])) {
    echo "Por favor ingrese los datos";


    //echo "<meta http-equiv='Refresh' content='2;../../index.php'>";
  }
  else {
    //  echo "usuario: ".$_POST['usuario']."  contrasena: ".$_POST['contrasena'];

      $usuario = $UsuarioObj->consultarUsuarioPorUsuarioPassword($_POST['usuario'], $_POST['contrasena']);
      //echo "xxx: ".$usuario->getUsuario();
      //echo "xxx: ".$usuario;
      $token = fn::guid();
      //echo "$token";
      $_SESSION['token'] = $token;
      $usuario->setToken($token);
      $UsuarioObj->updateUsuario($usuario);

      echo "<meta http-equiv='Refresh' content='0;/'>";


  }
}


?>
