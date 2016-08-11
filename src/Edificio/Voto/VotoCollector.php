<?php

  require 'Collector.php';
  require 'Voto.php';
  class CollectorVoto extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addVoto($voto)
   {
     return self::execQuery("INSERT INTO v_tes(nombre) VALUES(DEFAUT,\'".$voto->getE_id()."\',\'".$voto->getU_id()."\',\'".$voto->getV_val()."\')");   
   }

   public function getVoto($id)
   {
    $stmt = self::$con->prepare("SELECT * FROM voto WHERE v_id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetch(PDO::FETCH_ASSOC);
    return $usuario;
   }
   public function readAllVoto(){

      return self::read('voto','Voto'); 


  }

   public function updateVoto($id,$voto)
   {
    try
    {
      self::execQuery("UPDATE v_tes SET e_id=\'".$voto->getE_id()."\',u_id=\'".$voto->getU_id()."\',v_val=\'".$voto->getV_val()."\' WHERE v_id=".$voto->getId());
return self::execQuery("INSERT INTO usuario(appellidos, nombres, usuario, contrasena, confContrasena, email, genero, fechaNacimiento, pais, tipoDiscapacidad, porcentajeDiscapacidad) VALUES".($usuario->getApellidos()).($usuario->getNombres()).($usuario->getUsuario()) .($usuario->getContrasena()).($usuario->getConfContrasena()).($usuario->getEmail()) .($usuario->getGenero()).($usuario->getFechaNacimiento()).($usuario->getPais()) .($usuario->getTipoDiscapacidad()).($usuario->getPorcentajeDiscapacidad());
     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteVoto($voto)
   {
    try
    {
      self::execQuery("DELETE FROM v_tes WEHRE v_id=".$voto->getId());

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

  
