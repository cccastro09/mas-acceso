<?php

  require 'Collector.php';
  require 'rol.php';
  class CollectorDemo extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addRoll($roll)
   {
     return self::execQuery("INSERT INTO rol(descripcion_rol) VALUES".$rol->getDescripcion_rol());   
   }

   public function getRol($id)
   {
    $stmt = self::$con->prepare("SELECT * FROM rol WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetch(PDO::FETCH_ASSOC);
    return $usuario;
   }
   public function readAllRol(){

      return self::read('rol','Rol'); 


  }

   public function updateRol($id,$rol)
   {
    try
    {
      self::execQuery("UPDATE rol SET nombre".$rol->getDescripcion_rol()."\' WHERE id=".$rol->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteRol($id)
   {
    try
    {
      self::execQuery("DELETE FROM rol WEHRE id=".$rol->getId());

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

  
