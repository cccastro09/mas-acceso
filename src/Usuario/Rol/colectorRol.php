<?php
namespace mas_acceso\usuario\Rol;

//require_once "RolClass.php";
//require_once "../../../autoload.php";
use mas_acceso\util\Collector;

class ColectorRol extends Collector
{
    public function __construct()
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
    public function leerRol()
    {

        return self::read('rol', 'RolClass');
    }
    public function updateRol($rol)
    {
        try {
             self::execQuery("UPDATE rol SET r_id='".$rol->getId()."',r_nombre='".$rol->getNombre()."',r_constante='".$rol->getConstante()."' WHERE r_id=".$rol->getId());

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getRol($id){
         return self::getBYId($id, 'rol', 'r_id', 'RolClass');
    }

    public function deleteRol($rol)
    {
        try {
             self::execQuery("DELETE FROM rol WHERE r_id=".$rol);

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
