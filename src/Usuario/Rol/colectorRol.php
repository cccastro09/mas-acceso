<?php
namespace "usuario/rol";
require "RolClass";
require "../../util/Collector.php"
class ColectorRol{
    function __construct()
   {
    parent::__construct();
   }

   public function addRol($rol)
   {
     return self::execQuery("INSERT INTO rol(r_constante, r_nombre) VALUES('".$rol->getConstante()."','".$rol->getNombre()."')");
   }

  /* public function getNombre($id)
   {

    $stmt = $this->con->prepare("SELECT * FROM demo WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Demo");
    return $usuario;
   }
   public function readAlldemo(){

      return self::read('demo','demo');


  }*/
   public function readAllRol(){

      return self::read('rol','Rol'); 


  }
   public function updateDemo($rolo)
   {
    try
    {
      self::execQuery("UPDATE rol SET id='".$rol->getId()."',nombre='".$rol->getNombre()."',r_constante='".$rol->getConstante()."' WHERE id=".$rol->getId());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }

   public function deleteRol($rol)
   {
    try
    {
      self::execQuery("DELETE FROM rol WHERE id=".$rol);

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }
   }
}