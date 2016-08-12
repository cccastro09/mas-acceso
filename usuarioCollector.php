<?php

  require 'Collector.php';
  require 'usuarioClass.php';
  class usuarioCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addUsuario($usuario)
   {
     return self::execQuery("INSERT INTO usuario(apellidos, nombres, usuario, contrasena, confContrasena, 
     email, genero, fechaNacimiento, pais, tipoDiscapacidad, porcentajeDiscapacidad) VALUES ".$usuario->getApellidos()"\',\'".$usuario->getNombres()"\',\'".$usuario->getUsuario()"\',\'".$usuario->getContrasena()"\',\'".$usuario->getConfContrasena()"\',\'".$usuario->getEmail()"\',\'".$usuario->getGenero()"\',\'".$usuario->getFechaNacimiento()"\',\'".$usuario->getPais()"\',\'".$usuario->getTipoDiscapacidad()"\',\'".$usuario->getPorcentajeDiscapacidad()"\'");
   }

   public function getUsuario($id)
   {
    $stmt = self::$con->prepare("SELECT * FROM usuario WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetch(PDO::FETCH_ASSOC);
    return $usuario;
   }
   public function readAllUsuario(){

      return self::read('usuario','usuarioClass'); 


  }

   public function updateUsuario($id,$usuario)
   {
    try
    {
      self::execQuery("UPDATE usuario SET apellidos, nombres, usuario, contrasena, confContrasena, 
     email, genero, fechaNacimiento, pais, tipoDiscapacidad, porcentajeDiscapacidad"
     .$usuario->getApellidos()"\',\'".$usuario->getNombres()"\',\'".$usuario->getUsuario()"\',\'".$usuario->getContrasena()"\',\'".$usuario->getConfContrasena()"\',\'".$usuario->getEmail()"\',\'".$usuario->getGenero()"\',\'".$usuario->getFechaNacimiento()"\',\'".$usuario->getPais()"\',\'".$usuario->getTipoDiscapacidad()"\',\'".$usuario->getPorcentajeDiscapacidad()"\' WHERE id=".$usuario->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteUsuario($id)
   {
    try
    {
      self::execQuery("DELETE FROM usuario WEHRE id=".$usuario->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   } 
}
?>

  
