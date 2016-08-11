<?php

  require 'Collector.php';
  require 'Demo.php';
  class CollectorDemo extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addDemo($demo)
   {
     return self::execQuery("INSERT INTO demo(nombre) VALUES".$demo->getNombre());   
   }

   public function getDemo($id)
   {
    $stmt = self::$con->prepare("SELECT * FROM demo WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetch(PDO::FETCH_ASSOC);
    return $usuario;
   }
   public function readAllDemo(){

      return self::read('demo','Demo'); 


  }

   public function updateDemo($id,$demo)
   {
    try
    {
      self::execQuery("UPDATE demo SET nombre".$demo->getNombre()."\' WHERE id=".$demo->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteDemo($id)
   {
    try
    {
      self::execQuery("DELETE FROM demo WEHRE id=".$demo->getId());

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

  
