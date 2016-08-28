<?php

  require 'collector.php';
  require 'demo.php';
  class calificarCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addCalificar($calificar)
   {
       $sql="INSERT INTO calificar(calificacion, comentario) VALUES('".$calificar->getCalificacion()."','".$calificar->getComentario()."')";
       /*echo $sql;*/
       print_r(self::execQuery($sql));   
       return true;   
   }

   public function getNombre($id)
   {
    
    $stmt = $this->con->prepare("SELECT * FROM calificar WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Calificar");
    return $usuario;
   }
   public function readAlldemo(){

      return self::read('calificar','calificar'); 


  }

   public function updateDemo($demo)
   {
    try
    {
      $sql="UPDATE demo SET id='".$calificar->getId()."',nombre='".$calificar->getCalificacion()."' ,foto='".$demo->getComentario()."' WHERE id=".$calificar->getId();
      self::execQuery($sql);

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteCalificar($calificar)
   {
    try
    {
      self::execQuery("DELETE FROM calificar WHERE id=".$calificar->id);

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
