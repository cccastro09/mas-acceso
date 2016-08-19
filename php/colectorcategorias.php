<?php

  require 'collector.php';
  require 'demo.php';
  class categoriasCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addCategoria($calificar)
   {
       $sql="INSERT INTO categorias(categoria, representacion) VALUES('".$categorias->getCategoria()."','".$calificar->getRepresentacion()."')";
       /*echo $sql;*/
       print_r(self::execQuery($sql));   
       return true;   
   }

   public function getCategoria($id)
   {
    
    $stmt = $this->con->prepare("SELECT * FROM categorias WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Categoria");
    return $usuario;
   }
   public function readAlldemo(){

      return self::read('categorias','categorias'); 


  }

   public function updateCategoria($categoria)
   {
    try
    {
      $sql="UPDATE categoria SET id='".$categoria->getId()."',nombre='".$categoria->getCalificacion()."' ,foto='".$cateogira->getCategoria()."' WHERE id=".$calificar->getId();
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
